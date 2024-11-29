<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WaiversController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', LandingPageController::class);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/waivers', [WaiversController::class, 'index'])->name('waivers.index');
Route::get('/waivers/create', [WaiversController::class, 'create'])->name('waivers.create');
Route::post('/waivers', [WaiversController::class, 'store'])->name('waivers.store');
Route::get('/waivers/{waiver}', [WaiversController::class, 'show'])->name('waivers.show');
