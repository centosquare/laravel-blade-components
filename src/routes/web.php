<?php

use CentoSquare\LaravelBladeComponents\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;



Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
