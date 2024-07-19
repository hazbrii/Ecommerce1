<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
 

class RegisterController extends Controller
{
    // public function show(){
    //     return view('auth.register');
    // }
    // public function register(Request $request){
    
    //     validator(request()->all(),[
            // 'fullname' => ['required'],
            // 'email' => ['required', 'email', 'unique:users,email'],
            // 'password' => ['required', 'min : 6', 'max:20'],
            // 'phone_number' => ['required'],
            // 'address' => ['required'],
            // 'gouvernorat' => ['required'],
    //     ])->validate();

    //     $user = User::create([
    //         'fullname'=> $request->fullname ,
    //         'email'=> $request->email ,
    //         'password'=> Hash::make($request->password) ,
    //         'phone_number'=> $request->phone_number ,
    //         'address'=> $request->address ,
    //         'gouvernorat'=> $request->gouvernorat ,
    //         'role' => 0,
    //     ]);

    //     // dd($user);

    //     if ($user) {
    //         event(new Registered($user));
    //         return redirect('/')->with('success', 'User registered successfully!');
    //     } 
    //     return redirect()->back()->with('error', 'Failed to register user.');
    // }
}
