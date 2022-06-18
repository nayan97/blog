<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
       /**
     * show dashboard
     */
    public function ShowLoginForm()
    {
        return view('admin.login');
    }

}
