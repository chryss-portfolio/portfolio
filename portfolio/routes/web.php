<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

$user_array = ['user' => Auth::user()]; // You can keep this for the 'profile' page only

// Public routes (accessible to all users)
Route::get('contact', [ContactController::class, 'show'])->name('contact');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
Route::view('/', 'home')->name('home');
Route::view('home', 'home')->name('home');
Route::view('dashboard', 'dashboard')->name('dashboard');
Route::view('skills', 'skills')->name('skills');
Route::view('projects', 'projects')->name('projects');

// Authenticated routes (accessible only to authenticated users)
Route::middleware(['auth'])->group(function () {
    Route::view('profile', 'profile')->name('profile');
});

require __DIR__.'/auth.php';
