<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ForgotPassword;
use App\Models\User;
use App\Notifications\ForgotPasswordNotification;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('pages.auth.forgot_password');
    }

    public function forgot_password(Request $request)
    {
        $credentials = $request->only(['username']);

        $validator = Validator::make($credentials, [
            'username' => 'bail|required|min:5|max:30'
        ]);

        if ($validator->fails())
            return redirect()->back()->withErrors([$validator->errors()]);

        try{
            $user = User::where(['username' => $credentials['username']])->first();
            if (!$user)
                return redirect()->back()->with('danger', 'Utilisateur inconnu');

            $data = [
                'code' => random_int(100000, 999999),
                'token' => Hash::make($user->email),
                'email' => $user->email,
                'expired_at' => Carbon::now()->add(10)
            ];

            ForgotPassword::where('email', $user->email)->delete();
            $forgotPassword = ForgotPassword::create($data);

            $user->notify(new ForgotPasswordNotification($forgotPassword->code, $forgotPassword->token));
            return redirect()->route('login')->with('success', 'Un mail vous a ete envoye.');
        }catch(QueryException $e){
            return redirect()->back()->with('danger', $e->getMessage());
        }
    }
}
