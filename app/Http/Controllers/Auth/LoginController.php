<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function login(){
        validator(request()->all(),[
            'email'=>['required','email'],
            'password'=>['required']
        ])->validate();
        if (auth()->attempt(
            request()->only(['email','password']),
            request()->filled('remember')
        )){
            $request->session()->regenerate();
            return redirect('/home');
        }
        return redirect()->back()->withErrors(['email'=>'Invalid Credential !']);
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
