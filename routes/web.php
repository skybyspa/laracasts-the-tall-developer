<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BookmarkController;

Route::view('/', 'welcome')->name('home');

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::view('dashboard', 'dashboard')->name('dashboard');
// });

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', RoleController::class)->name('dashboard');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('bookmarks', [BookmarkController::class, 'index'])->name('bookmarks.index');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::post('bookmarks/{role}', [BookmarkController::class, 'store'])->name('bookmarks.store');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::delete('bookmarks/{role}', [BookmarkController::class, 'destroy'])->name('bookmarks.destroy');
});



require __DIR__.'/settings.php';
