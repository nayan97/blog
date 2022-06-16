<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

route::get('admin-dashboard',[DashboardController::class,'showAdminDashboard'])-> name('admin.dashboard');