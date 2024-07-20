<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Models\User;

use Illuminate\Auth\Events\Registered;

use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use Illuminate\Validation\Rules;

use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'fullname' => ['required','max:100'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'min : 6', 'max:20'],
            'phone_number' => ['required'],
            'address' => ['required'],
            'gouvernorat' => ['required'],
        ]);

        $user = User::create([
            'fullname'=> $request->fullname ,
            'email'=> $request->email ,
            'password'=> Hash::make($request->password) ,
            'phone_number'=> $request->phone_number ,
            'address'=> $request->address ,
            'gouvernorat'=> $request->gouvernorat ,
            'role' => 0,
        ]);
        
        event(new Registered($user));
        Auth::login($user);
        return redirect('/');
    }
}
