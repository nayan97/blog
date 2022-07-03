<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissiondController extends Controller
{
    /**
     * Show All Permission
     */


     public function index()
     {
        return view('admin.users.permission.index');
     }
}
