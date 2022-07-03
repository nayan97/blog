<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     /**
     * Show All Admins
     */


    public function index()
    {
       return view('admin.users.index');
    }
}
