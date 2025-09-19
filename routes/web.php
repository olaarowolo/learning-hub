<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TutorController;
use Illuminate\Support\Facades\Http;

Route::get('/moodle', [CourseController::class, 'moodle'])->name('moodle');

Route::get('/', function () {
    return view('welcome');
});

// In routes/web.php

Route::get('/preview-side-nav', function () {
    return view('partials.side-nav');
});

Route::get('/test-br-layout', function () {
    return view('test-br-layout');
});

Route::get('/test-ng-layout', function () {
    return view('test-ng-layout');
});

Route::get('/legals/safeguarding', function () {
    return view('legals.safeguarding')->with('breadcrumbTitle', 'Safeguarding');
});

Route::get('/legals/privacy', function () {
    return view('legals.privacy')->with('breadcrumbTitle', 'Privacy Policy');
});

Route::get('/legals/terms', function () {
    return view('legals.terms')->with('breadcrumbTitle', 'Terms of Service');
});

Route::get('/registration-success', function () {
    return view('auth.registration-success');
});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Separate login routes for students and tutors
Route::get('/student/login', function () {
    return view('auth.student-login');
})->name('student.login');

Route::post('/student/login', [LoginController::class, 'studentLogin'])->name('student.login.post');

Route::get('/tutor/login', function () {
    return view('auth.tutor-login');
})->name('tutor.login');

Route::post('/tutor/login', [LoginController::class, 'tutorLogin'])->name('tutor.login.post');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile')->middleware('auth');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');

Route::get('/create-tutor-test-account', [RegisterController::class, 'createTutorTestAccount']);
Route::get('/create-tutor-olaarowolo', [RegisterController::class, 'createTutorOlaarowolo']);
Route::get('/tutor/students', [TutorController::class, 'students'])->name('tutor.students')->middleware('auth');

Route::get('/tutor-login-details', [RegisterController::class, 'getTutorLoginDetails']);

Route::get('/skills', [CourseController::class, 'index'])->name('skills.index');
Route::get('/course', [CourseController::class, 'index']);
Route::get('/skills/{course}', [CourseController::class, 'show'])->name('skills.show');
