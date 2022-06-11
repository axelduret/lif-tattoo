<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        // 'canLogin' => Route::has('login'),
        // 'canRegister' => Route::has('register'), //NOTE: Register enable/disable.
        // 'laravelVersion' => Application::VERSION,
        // 'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/info', function () {
    return Inertia::render('Info');
});

Route::get('/photo', function () {
    return Inertia::render('Photo');
});

Route::get('/flash', function () {
    return Inertia::render('Flash');
});

Route::get('/contact', function () {
    return Inertia::render('Contact');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
