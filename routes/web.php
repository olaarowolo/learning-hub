<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// In routes/web.php

Route::get('/preview-side-nav', function () {
    return view('partials.side-nav');
});

