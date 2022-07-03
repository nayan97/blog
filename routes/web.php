<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissiondController;

Route::get ('admin-dashboard', [DashboardController::class,'ShowAdminDashboard'])-> name('admin.dashboard');
Route::get ('admin-login', [LoginController::class,'ShowLoginForm'])-> name('admin.login');


// Permission

Route::get ('permission', [ PermissiondController::class,'index'])-> name('admin.permission');


// Roles

Route::get ('role', [ RoleController::class,'index'])-> name('admin.role');


// Admins

Route::get ('admin-create', [ AdminController::class,'index'])-> name('admin.create');



