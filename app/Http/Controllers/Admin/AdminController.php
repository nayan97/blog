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
 

    /**
     * User Data Store
     */
    public function store(Request $request)
    {
        $this -> validate( $request,  [
            'name'              => 'required',
            'email'             => 'required|email|unique:admins',
            'cell'              => 'required|unique:admins',
            'username'          => 'required|unique:admins'
        ]);

        Admin::create([
            'name'              => $request -> name,
            'role_id'           => $request -> role,
            'email'             => $request -> email,
            'cell'              => $request -> cell,
            'username'          => $request -> username,
            'password'          => Hash::make('1234567890'),
            'photo'             => 'avatar.webp'
        ]);

        return redirect() -> route('admin.all') -> with('success','Admin users created successful');
    }


       /**
     * User Data Delete
     */


    public function destroy($id)

    {
        $delete_data    = Admin:: FindOrFail($id);
        $delete_data    ->delete();
        return redirect() -> route('admin.all') -> with ('success-main', 'Admin Data Deleted Successfully');
    }


}
