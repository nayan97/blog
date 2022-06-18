<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;

Route::get ('admin-dashboard', [DashboardController::class,'ShowAdminDashboard'])-> name('admin.dashboard');
Route::get ('admin-login', [LoginController::class,'ShowLoginForm'])-> name('admin.login');
