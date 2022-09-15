<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

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
 

public function store (Request $request)
{
 $this -> validate ( $request, [

   'name'    =>   'required',
   'email'   =>    'required|email|unique:admins',
   'cell'    =>     'required|number|unique:admins',
   'username'=>      'required|unique:admins '


 ]);

   Admin::create([

         'name'      => $request -> name,
         'email'     => $request -> email,
         'cell'      => $request -> cell,
         'username'  => $request -> username,
         'password'  => Hash::make('1234567890'),
         'photo'     => ''
   ]);

  return redirect() -> route('admin.all') -> with ('success', 'admin created successfily');


}

}
