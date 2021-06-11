<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ForgotPassword;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ResetPasswordController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.auth.reset_password')->with($request->all());
    }

    public function reset_password(Request $request)
    {
        $credentials = $request->only(['token', 'code']);

        $validator = Validator::make($credentials, [
            'token' => 'bail|required',
            'code' => 'bail|number|required|min:6|max:6'
        ]);

        if ($validator->fails())
            return redirect()->route('login')->withErrors([$validator->errors()]);

        try{
            $forgotPassword = ForgotPassword::where($credentials)
                ->where('created_at', '>', Carbon::now()->subHours(1))->first();

            if (!$forgotPassword)
                return redirect()->route('login')->with('danger', 'Information incorrect.');


        }catch (QueryException $e){return redirect()->back()->with('danger', $e->getMessage());}
    }
}
