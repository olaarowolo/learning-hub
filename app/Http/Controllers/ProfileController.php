<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        $profile = $user->profile;

        return view('profile.edit', compact('user', 'profile'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:20'],
            'date_of_birth' => ['nullable', 'date', 'before:today'],
            'school_name' => ['nullable', 'string', 'max:255'],
            'school_location' => ['nullable', 'string', 'max:255'],
            'grade_level' => ['nullable', 'string', 'max:255'],
            'curriculum' => ['nullable', 'string', 'max:255'],
            'subject_preferences' => ['nullable', 'array'],
            'notifications_enabled' => ['nullable', 'boolean'],
            'timezone' => ['nullable', 'string', 'max:255'],
            'parent_email' => ['nullable', 'email', 'max:255'],
            'parent_phone' => ['nullable', 'string', 'max:20'],
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Update user name
        $user->name = $request->input('name');
        $user->save();

        // Update or create profile
        $profileData = $request->only([
            'phone',
            'date_of_birth',
            'school_name',
            'school_location',
            'grade_level',
            'curriculum',
            'subject_preferences',
            'notifications_enabled',
            'timezone',
            'parent_email',
            'parent_phone',
        ]);

        if ($user->profile()->exists()) {
            $user->profile()->update($profileData);
        } else {
            $user->profile()->create($profileData);
        }

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }
}
