<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationNotification;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'date_of_birth' => ['nullable', 'date', 'before:today'],
            'role' => ['required', 'string', 'in:student'],
        ];

        // Check if user is under 18 and add parent contact validation
        if ($request->filled('date_of_birth')) {
            $birthDate = new \DateTime($request->date_of_birth);
            $today = new \DateTime();
            $age = $today->diff($birthDate)->y;

            if ($age < 18) {
                $rules['parent_email'] = ['required', 'email', 'max:255'];
                $rules['parent_phone'] = ['required', 'string', 'max:20'];
            }
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Create user profile with all fields
        UserProfile::create([
            'user_id' => $user->id,
            'date_of_birth' => $request->input('date_of_birth'),
            'role' => $request->input('role', 'student'),
            'curriculum' => $request->input('curriculum', 'uk'),
            'parent_email' => $request->input('parent_email'),
            'parent_phone' => $request->input('parent_phone'),
        ]);

        // Send registration notification email
        Mail::to($user->email)->send(new RegistrationNotification($user));

        // You can add login or redirect logic here
        return redirect('/registration-success');
    }

    public function createTutorTestAccount()
    {
        // Check if test tutor user already exists
        $existingUser = User::where('email', 'tutor@test.com')->first();
        if ($existingUser) {
            return response()->json(['message' => 'Tutor test account already exists', 'user_id' => $existingUser->id]);
        }

        // Create a test tutor user
        $user = User::create([
            'name' => 'Test Tutor',
            'email' => 'tutor@test.com',
            'password' => Hash::make('password123'),
        ]);

        // Create tutor profile
        UserProfile::create([
            'user_id' => $user->id,
            'role' => 'tutor',
            'phone' => '123-456-7890',
            'date_of_birth' => '1980-01-01',
            'school_name' => 'Test School',
            'school_location' => 'Test City',
            'grade_level' => 'High School',
            'curriculum' => 'uk',
            'subject_preferences' => json_encode(['Math', 'Science']),
            'notifications_enabled' => true,
            'timezone' => 'UTC',
        ]);

        // Send registration notification email
        Mail::to($user->email)->send(new RegistrationNotification($user));

        return response()->json(['message' => 'Tutor test account created successfully', 'user_id' => $user->id]);
    }

    public function getTutorLoginDetails()
    {
        $user = User::find(3);
        if (!$user) {
            return response()->json(['error' => 'User not found']);
        }

        $profile = $user->profile;
        if (!$profile) {
            // Create the profile
            $user->profile()->create([
                'role' => 'tutor',
            ]);
            $profile = $user->profile;
        }

        return response()->json([
            'email' => $user->email,
            'password' => 'password123',
            'role' => $profile->role,
            'name' => $user->name,
        ]);
    }

    public function createTutorOlaarowolo()
    {
        // Check if tutor user already exists
        $existingUser = User::where('email', 'tutor@olaarowolo.com')->first();
        if ($existingUser) {
            return response()->json(['message' => 'Tutor account already exists', 'user_id' => $existingUser->id]);
        }

        // Create the tutor user
        $user = User::create([
            'name' => 'Tutor Olaarowolo',
            'email' => 'tutor@olaarowolo.com',
            'password' => Hash::make('password123'),
        ]);

        // Create tutor profile
        UserProfile::create([
            'user_id' => $user->id,
            'role' => 'tutor',
            'phone' => '123-456-7890',
            'date_of_birth' => '1980-01-01',
            'school_name' => 'Olaarowolo School',
            'school_location' => 'Test City',
            'grade_level' => 'High School',
            'curriculum' => 'uk',
            'subject_preferences' => json_encode(['Math', 'Science']),
            'notifications_enabled' => true,
            'timezone' => 'UTC',
        ]);

        // Send registration notification email
        Mail::to($user->email)->send(new RegistrationNotification($user));

        return response()->json(['message' => 'Tutor account created successfully', 'user_id' => $user->id, 'email' => $user->email, 'password' => 'password123']);
    }
}
