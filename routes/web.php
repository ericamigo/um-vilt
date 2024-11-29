<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WaiverBeneficiariesController;
use App\Http\Controllers\WaiversController;
use App\Http\Controllers\WaiverSubmitForApprovalController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', LandingPageController::class);

Route::get('/dashboard', DashboardController::class)->name('dashboard');
Route::resource('notifications', NotificationsController::class)
    ->only('index', 'show', 'update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::patch('/waiver/{waiver}/submit-for-approval', WaiverSubmitForApprovalController::class)
    ->name('waivers.submit-for-approval');

Route::resource('waivers', WaiversController::class)
    ->except('edit', 'update', 'destroy');

Route::resource('waivers.beneficiaries', WaiverBeneficiariesController::class)
    ->only('store', 'update', 'destroy');
