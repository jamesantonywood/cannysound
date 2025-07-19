<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::middleware([
    'auth',
    'verified',
])->group(function () {
    Route::get('admin', function () {
        return Inertia::render('Admin/Dashboard');
    })->name('admin.dashboard');

    // Article Resource
    Route::get('admin/articles', [ArticleController::class, 'index'])->name('admin.articles');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
