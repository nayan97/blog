<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
     /**
     * Show All Admins
     */


    public function index()
    {

      $roles = Role:: latest()  -> get();
      $admins = Admin:: latest()  -> get();
       return view('admin.users.index',[
         'all_data' => $admins ,
         'type'      => 'add',
         'roles'     => $roles
      ]);
   }
}
