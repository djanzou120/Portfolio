<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index() {
        return view('pages.auth.login');
    }

    public function login(Request $request){
        $credentials = $request->only(['username', 'password']);

        $validator = Validator::make($credentials, [
            'username' => 'bail|required|min:5|max:30',
            'password' => 'bail|required|min:6|max:30',
        ]);

        if ($validator->fails())
            return redirect()->back()->withErrors([$validator->errors()]);
        if (Auth::attempt($credentials)){
            \auth()->login(Auth::user());
            return redirect()->route('dashboard')->with('success', 'Connecter avec succes.');
        }
        return redirect()->back()->with('danger', 'Incorrect Username or Password');
    }
}
