<?php

namespace App\Http\Controllers\Admin;


use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissiondController extends Controller
{
    /**
     * Show All Permission
     */


     public function index()
     {
      $data = Permission::latest() -> get();
        return view('admin.users.permission.index', [ 
         'all_data' =>$data
        
      ]);
     }

        /**
     * Show All Permission
     */


    public function store(Request $request)
    {
       //validate
       $this -> validate ($request,[
         'name'   => 'required'
       ]);
       Permission::create([
         'name'   => $request -> name,
         'slug'   => Str::slug($request -> name)
       ]);

       return back() ->with('success', 'Permission added successfuly');
    }
}
