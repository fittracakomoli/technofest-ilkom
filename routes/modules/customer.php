<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::middleware('auth', 'check.permission:customer')->group(function () {
    Route::get('customer/dashboard', function () {
        return Inertia::render('Customer/DashboardCustomer');
    })->name('customer.dashboard');

    Route::get('customer/profile', [ProfileController::class, 'edit'])->name('customer.profile.edit');
    Route::patch('customer/profile', [ProfileController::class, 'update'])->name('customer.profile.update');
    Route::delete('customer/profile', [ProfileController::class, 'destroy'])->name('customer.profile.destroy');
});