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
       return view('admin.users.role.index', compact('permissions', 'roles'));
    }

     /**
     * Store All Role
     */


     public function store(Request $request)
     {
       $this -> validate ($request,[
        'name' => 'required'
            
      ]);
      Role::create([
        'name'   => $request -> name,
        'slug'   => Str::slug($request -> name),
        'permission' => json_encode($request -> per)

      ]);
      return back() ->with('success', 'Permission added successfuly');
     }


}

