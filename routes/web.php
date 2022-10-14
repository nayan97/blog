<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissiondController;

Route::group(['middleware' => 'admin.redirect'], function(){
    Route::get ('admin-login', [LoginController::class,'ShowLoginForm'])-> name('admin.login');
    Route::post ('admin-login', [LoginController::class,'AdminLoginSystem'])-> name('admin.login.system');
});
   



Route::group(['middleware' => 'admin'], function(){
    Route::get ('admin-logout', [LoginController::class,'AdminLogoutSystem'])-> name('admin.logout.system');
    
    Route::get ('admin-dashboard', [DashboardController::class,'ShowAdminDashboard'])-> name('admin.dashboard');

    // Permission

    Route::get ('permission', [ PermissiondController::class,'index'])-> name('admin.permission');
    Route::post ('permission', [ PermissiondController::class,'store'])-> name('admin.permission.store');
    Route::get ('permission-delete/{id}', [ PermissiondController::class,'destroy'])-> name('admin.permission.destroy');
    Route::get ('permission-edit/{id}', [ PermissiondController::class,'edit'])-> name('admin.permission.edit');
    Route::post ('permission-update/{id}', [ PermissiondController::class,'update'])-> name('admin.permission.update');


    // Roles

    Route::get ('role', [ RoleController::class,'index'])-> name('admin.role');
    Route::post ('role', [ RoleController::class,'store'])-> name('admin.role.store');
    Route::get ('role-delete/{id}', [ RoleController::class,'destroy'])-> name('admin.role.destroy');
    Route::get('role-edit/{id}', [ RoleController::class,'edit'])-> name('admin.role.edit');
    Route::post('role-update/{id}', [ RoleController::class,'update'])-> name('admin.role.update');


    // Admins

    Route::get ('admin-all', [ AdminController::class,'index'])-> name('admin.all');
    Route::post ('admin-store', [ AdminController::class,'store'])-> name('admin.store');
    Route::get ('admin-delete/{id}', [ AdminController::class,'destroy'])-> name('admin.all.destroy');
    Route::get ('admin-edit/{id}', [ AdminController::class,'edit'])-> name('admin.all.edit');
    Route::post ('admin-update/{id}', [ AdminController::class,'update'])-> name('admin.update');

});





