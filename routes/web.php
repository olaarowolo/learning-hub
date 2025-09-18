<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// In routes/web.php

Route::get('/preview-side-nav', function () {
    return view('partials.side-nav');
});

// Yeargroup routes - general route for all /data/yeargroups/*
Route::get('/data/yeargroups/{path}', function ($path) {
    $viewPath = str_replace('.html', '', $path);
    $view = 'yeargroups.' . str_replace('/', '.', $viewPath);
    return view($view);
})->where('path', '.*');
