<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
      /**
     * Show All Role
     */


    public function index()
    {
      $permissions = Permission::all();
      $roles = Role::latest() -> get();
      $type = 'add';
       return view('admin.users.role.index', compact('permissions', 'roles', 'type'));
    }

     /**
     * Store All Role
     */


     public function store(Request $request)
     {
       $this -> validate ($request,[
        'name' => 'required',
      
            
      ]);
      Role::create([
        'name'   => $request -> name,
        'slug'   => Str::slug($request -> name),
        'permission' => json_encode($request -> per)

      ]);
      return back() ->with('success', 'Permission added successfuly');
     }

     
    /**
     * Delete A Role
     */

    public function destroy($id)
    {
      $delete_data = Role::findOrFail($id);
      $delete_data -> delete();
      return redirect() -> route('admin.role') ->with('success-main', 'Role deleted successfuly');
    }


       /**
     * Show All Role
     */


    public function edit($id)
    { 
      $permissions = Permission::all();
      $role = Role::findOrFail($id);
      $roles = Role::latest() -> get();
      $type  = 'edit';
       return view('admin.users.role.index', compact('permissions', 'roles', 'role', 'type'));
    }



}

