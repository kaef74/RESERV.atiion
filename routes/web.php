<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    //Route::get('/dashboard', [PostController::class, 'index'])->name('dashboard')->middleware(['can:show posts']);

    //Route::get('add-post', [PostController::class, 'create'])->name('add-post')->middleware(['can:add posts']);
    //Route::post('store-post', [PostController::class, 'store'])->name('store-post')->middleware(['can:add posts']);
    //Route::get('edit-post/{id}', [PostController::class, 'edit'])->name('edit-post')->middleware(['can:edit posts']);
    //Route::put('update-post/{id}', [PostController::class, 'update'])->name('update-post')->middleware(['can:edit posts']);
    //Route::delete('delete-post/{id}', [PostController::class, 'delete'])->name('delete-post')->middleware(['can:delete posts']);

    Route::resource('/roles', RoleController::class)->middleware('role:super-admin');
    Route::resource('/users', UserController::class)->middleware('role:super-admin');
});

require __DIR__.'/auth.php';
