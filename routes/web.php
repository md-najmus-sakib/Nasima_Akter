<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Authentication Routes
require __DIR__.'/auth.php';

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/profile/update', [AdminController::class, 'updateProfile'])->name('admin.update.profile');
    Route::put('/skills/{id}', [AdminController::class, 'updateSkill'])->name('admin.update.skill');
    Route::delete('/skills/{id}', [AdminController::class, 'deleteSkill'])->name('admin.delete.skill');
    Route::post('/skills', [AdminController::class, 'addSkill'])->name('admin.add.skill');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthenticationController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [Controller::class, 'dashboard']);
});

// Registration Routes
Route::get('/registration', function () {
    return view('auth.registration');
})->name('registration');

Route::post('/registration', [AuthenticationController::class, 'register']);