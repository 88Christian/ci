<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/work-experience', function () {
    return view('work-experience');
})
    ->middleware(['auth'])
    ->name('work.experience');

Route::get('/projects', function () {
    return view('projects');
})
    ->middleware(['auth'])
    ->name('projects');

Route::get('/contact', function () {
    return view('contact');
})
    ->middleware(['auth'])
    ->name('contact');

Route::get('/about', function () {
    return view('about');
})
    ->middleware(['auth'])
    ->name('about');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
