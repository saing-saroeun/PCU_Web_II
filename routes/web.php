<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard-index',  [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

    // Todo: Admin
    Route::get('/admin/index', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/create', [App\Http\Controllers\AdminController::class, 'create'])->name('admin.create');

    // Todo: Dentist
    Route::get('dentist/index', [App\Http\Controllers\DentistController::class, 'index'])->name('dentist.index');
    Route::get('dentist/create', [App\Http\Controllers\DentistController::class, 'create'])->name('dentist.create');
    Route::get('dentist/detail/{id}', [App\Http\Controllers\DentistController::class, 'detail'])->name('dentist.detail');
});

require __DIR__ . '/auth.php';
