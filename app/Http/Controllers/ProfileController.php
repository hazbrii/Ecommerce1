<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Hash;

class ProfileController extends Controller
{

    public function edit(Request $request): View
    {
        return view('client.profile.edit', [
            'user' => $request->user(),
        ]);
    }


    public function update(Request $request): RedirectResponse
    {
        
        $user = Auth::user();
        
        $validatedData = $request->validate([
            'gouvernorat' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:100'],
            'old_password' => ['required', 'string', 'min:6'],
            'password' => ['nullable', 'string', 'min:6', 'confirmed'],
        ]);

       
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'Incorrect password.']);
        }

        $user->gouvernorat = $validatedData['gouvernorat'];
        $user->address = $validatedData['address'];
        if ($request->filled('password')) {
            $user->password = Hash::make($validatedData['password']);
        }
        
        $user->save();

        return back()->with('status', 'profile-updated');
    }


    public function destroy(Request $request): RedirectResponse
    {   
        // $request->validateWithBag('userDeletion', [
        //     'password' => ['required', 'current_password'],
        // ]);
        $user = $request->user();

        Auth::logout();
        
        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return Redirect::to('/login');
    }
    // public function updateTab(Request $request)
    // {
    //     // Validate and store the active tab in the session
    //     $request->validate([
    //         'active_tab' => 'required|string|in:dashboard,orders,address,account',
    //     ]);

    //     session(['active_tab' => $request->input('active_tab')]);

    //     return redirect()->route('profile');
    // }
}
