<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         // 'canLogin' => Route::has('login'),
//         // 'canRegister' => Route::has('register'), //NOTE: Register enable/disable.
//         // 'laravelVersion' => Application::VERSION,
//         // 'phpVersion' => PHP_VERSION,
//     ]);
// })->name('home');

Route::get('/', function () {
    return Inertia::render('Info');
})->name('info');

Route::get('/photo', function () {
    return Inertia::render(
        'Photo',
        [
            'imagesCollection' => collect(
                [
                    ['name' => 'tattoo_01', 'path' => 'tattoo_01.jpg', 'id' => 0],
                    ['name' => 'tattoo_02', 'path' => 'tattoo_02.jpg', 'id' => 1],
                    ['name' => 'tattoo_03', 'path' => 'tattoo_03.jpg', 'id' => 2],
                    ['name' => 'tattoo_04', 'path' => 'tattoo_04.jpg', 'id' => 3]
                ]
            )
        ]
    );
})->name('photo');

Route::get('/flash', function () {
    return Inertia::render('Flash');
})->name('flash');

Route::get('/contact', function () {
    return Inertia::render('Contact');
})->name('contact');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
