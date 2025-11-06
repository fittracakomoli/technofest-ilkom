<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware('auth', 'check.permission:organizer')->group(function () {
    Route::get('organizer/dashboard', function () {
        return Inertia::render('Organizer/DashboardOrganizer');
    })->name('organizer.dashboard');
});