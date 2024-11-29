<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WaiverBeneficiariesController;
use App\Http\Controllers\WaiversController;
use App\Http\Controllers\WaiverSubmitForApprovalController;
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

Route::prefix('/waivers')->name('waivers.')->group(function () {
    Route::get('/', [WaiversController::class, 'index'])->name('index');
    Route::get('/create', [WaiversController::class, 'create'])->name('create');
    Route::post('/', [WaiversController::class, 'store'])->name('store');
    Route::get('/{waiver}', [WaiversController::class, 'show'])->name('show');

    Route::prefix('/beneficiaries')->name('beneficiaries.')->group(function () {
        Route::post('/{waiver}', [WaiverBeneficiariesController::class, 'store'])->name('store');
        Route::patch('/{waiver}/{beneficiary}', [WaiverBeneficiariesController::class, 'update'])->name('update');
        Route::delete('/{waiver}/{beneficiary}', [WaiverBeneficiariesController::class, 'destroy'])->name('destroy');
    });

    Route::patch('/{waiver}/submit-for-approval', WaiverSubmitForApprovalController::class)->name('submit-for-approval');
});
