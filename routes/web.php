<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome');
// })->name('home');

Route::get('/', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
