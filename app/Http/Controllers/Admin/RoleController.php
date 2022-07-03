<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
      /**
     * Show All Role
     */


    public function index()
    {
       return view('admin.users.role.index');
    }
}

