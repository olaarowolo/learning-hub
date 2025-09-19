<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TutorController extends Controller
{
    public function students()
    {
        $user = Auth::user();

        // Check if user is a tutor
        if (!$user->profile || $user->profile->role !== 'tutor') {
            abort(403, 'Unauthorized access');
        }

        // Get all students
        $students = User::whereHas('profile', function ($query) {
            $query->where('role', 'student');
        })->get();

        return view('tutor.students', compact('students'));
    }
}
