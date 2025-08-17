<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Show the profile page
     */
    public function index()
    {
        // Now it will look for resources/views/profile.blade.php
        return view('profile', ['user' => Auth::user()]);
    }

    /**
     * Update profile data
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        // Validation
        $request->validate([
            'name'            => 'required|string|max:255',
            'email'           => 'required|email|unique:users,email,' . $user->id,
            'phone'           => 'nullable|string|max:20',
            'password'        => 'nullable|min:6',
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Update basic fields
        $user->name  = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        // Update password only if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Update profile picture if uploaded
        if ($request->hasFile('profile_picture')) {
            $filename = time() . '.' . $request->profile_picture->extension();
            $request->profile_picture->move(public_path('uploads/profile'), $filename);
            $user->profile_picture = 'uploads/profile/' . $filename;
        }

        $user->save();

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully!');
    }
}
