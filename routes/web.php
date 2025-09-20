<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TutorController;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\BookNowController;
use App\Http\Controllers\BlogController;

Route::get('/moodle', [CourseController::class, 'moodle'])->name('moodle');
Route::post('/moodle/enrol', [CourseController::class, 'enrol'])->name('moodle.enrol');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/br/yeargroups/EYFS/y0/yrR-index', function () {
    return view('br.yeargroups.EYFS.y0.yrR-index');
})->name('br.yeargroups.EYFS.y0.yrR-index');

Route::get('/br/yeargroups/KS0/y0/yr0-index', function () {
    return view('br.yeargroups.KS0.y0.yr0-index');
})->name('br.yeargroups.KS0.y0.yr0-index');

Route::get('/br/yeargroups/KS1/y1/yr1-index', function () {
    return view('br.yeargroups.KS1.y1.yr1-index');
})->name('br.yeargroups.KS1.y1.yr1-index');

Route::get('/br/yeargroups/KS1/y2/yr2-index', function () {
    return view('br.yeargroups.KS1.y2.yr2-index');
})->name('br.yeargroups.KS1.y2.yr2-index');

Route::get('/br/yeargroups/KS2/y3/yr3-index', function () {
    return view('br.yeargroups.KS2.y3.yr3-index');
})->name('br.yeargroups.KS2.y3.yr3-index');

Route::get('/br/yeargroups/KS2/y4/yr4-index', function () {
    return view('br.yeargroups.KS2.y4.yr4-index');
})->name('br.yeargroups.KS2.y4.yr4-index');

Route::get('/br/yeargroups/KS2/y5/yr5-index', function () {
    return view('br.yeargroups.KS2.y5.yr5-index');
})->name('br.yeargroups.KS2.y5.yr5-index');

Route::get('/br/yeargroups/KS2/y6/yr6-index', function () {
    return view('br.yeargroups.KS2.y6.yr6-index');
})->name('br.yeargroups.KS2.y6.yr6-index');

Route::get('/br/yeargroups/KS3/y7/yr7-index', function () {
    return view('br.yeargroups.KS3.y7.yr7-index');
})->name('br.yeargroups.KS3.y7.yr7-index');

Route::get('/br/yeargroups/KS3/y8/yr8-index', function () {
    return view('br.yeargroups.KS3.y8.yr8-index');
})->name('br.yeargroups.KS3.y8.yr8-index');

Route::get('/br/yeargroups/KS3/y9/yr9-index', function () {
    return view('br.yeargroups.KS3.y9.yr9-index');
})->name('br.yeargroups.KS3.y9.yr9-index');

Route::get('/br/yeargroups/KS4/y10/yr10-index', function () {
    return view('br.yeargroups.KS4.y10.yr10-index');
})->name('br.yeargroups.KS4.y10.yr10-index');

Route::get('/br/yeargroups/KS4/y11/yr11-index', function () {
    return view('br.yeargroups.KS4.y11.yr11-index');
})->name('br.yeargroups.KS4.y11.yr11-index');

Route::get('/br/yeargroups/KS5/y12/yr12-index', function () {
    return view('br.yeargroups.KS5.y12.yr12-index');
})->name('br.yeargroups.KS5.y12.yr12-index');

Route::get('/br/yeargroups/KS5/y13/yr13-index', function () {
    return view('br.yeargroups.KS5.y13.yr13-index');
})->name('br.yeargroups.KS5.y13.yr13-index');

// Updated route for Purpose in Motion
Route::get('br/yeargroups/purpose', function () {
    return view('br.yeargroups.purpose.index'); // Adjusted to match the correct view path
})->name('purpose');

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

// Adding a route for 'legals.privacy'
Route::get('/privacy-policy', function () {
    return view('legals.privacy')->with('breadcrumbTitle', 'Privacy Policy');
})->name('legals.privacy');

// Adding a route for 'legals.terms'
Route::get('/terms-of-service', function () {
    return view('legals.terms')->with('breadcrumbTitle', 'Terms of Service');
})->name('legals.terms');

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

Route::get('/book-now', [BookNowController::class, 'showForm'])->name('book-now.form');
Route::post('/book-now', [BookNowController::class, 'submitForm'])->name('book-now.submit');

Route::get('/maths/autumn', [MathsController::class, 'autumn'])->name('maths.autumn.index');
Route::get('/maths/ma', [MathsController::class, 'ma'])->name('maths.ma.index');

// Activities and Blog routes
Route::get('/activities', [App\Http\Controllers\ActivitiesController::class, 'index'])->name('activities.index');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

