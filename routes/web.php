<?php

use Inertia\Inertia;
use App\Repositories\MenuRepository;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Pages\ShowController;
use App\Http\Controllers\Web\Pages\IndexController;
use App\Http\Controllers\Web\Pages\StoreController as PageStoreController;
use App\Http\Controllers\Web\Pages\DeleteController;
use App\Http\Controllers\Web\Pages\UpdateController;
use App\Http\Controllers\Web\Images\StoreController as ImageStoreController;

// Route::get('/home', function () {
//     return call_user_func(new IndexController, 'home');

//     // [
//     // 'canLogin' => Route::has('login'),
//     // 'canRegister' => Route::has('register'), //NOTE: Register enable/disable.
//     // 'laravelVersion' => Application::VERSION,
//     // 'phpVersion' => PHP_VERSION,
//     // ]);
// })->name('home');

Route::prefix('pages')->as('pages.')->group(function () {
    Route::post(uri: '', action: PageStoreController::class)->name(name: 'store');
    // Route::get(uri: '{id}', action: ShowController::class)->name(name: 'show');
    // Route::patch(uri: '{id}', action: UpdateController::class)->name(name: 'update');
    // Route::delete(uri: '{id}', action: DeleteController::class)->name(name: 'delete');
});

Route::prefix('image')->as('image.')->group(function () {
    Route::post(uri: '', action: ImageStoreController::class)->name(name: 'store');
});
Route::get('/images', function () {
    dd('dsad');
})->name('images');

try {
    $routes = call_user_func(new MenuRepository);
    foreach ($routes as $route) {
        Route::get(
            uri: '/' . $route->path,
            action: fn () => call_user_func(new IndexController, $route->page->name)
        )
            ->name(name: $route->page->name);
    }
} catch (\Throwable $e) {
}

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        // IMPORTANT Only user id 1 can create teams. (admin)
        $canCreateTeams = false;
        if (auth()->user()->id === 1) {
            $canCreateTeams = true;
        }
        return Inertia::render('Dashboard', [
            'canCreateTeams' => $canCreateTeams
        ]);
    })->name('dashboard');
});
