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
         'all_data'    => $data,
         'form_type'   => 'add'
        
      ]);
     }

      /**
     * Show Edit Permission
     */


    public function edit($id)
    {
      $data = Permission::latest() -> get();
      $single = Permission::findOrFail($id);
       return view('admin.users.permission.index', [ 
        'edit_data'    => $single,
        'all_data'    => $data,
        'form_type'   => 'edit'
       
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

    /**
     * Delete All Permission
     */

    public function destroy($id)
    {
      $delete_data = Permission::findOrFail($id);
      $delete_data -> delete();
      return back() ->with('success-main', 'Permission deleted successfuly');
    }



         /**
     * Updte Permission
     */

    public function update(Request $request, $id)
    {
   
      $update_data = Permission::findOrFail($id);
      $update_data -> update([
        'name'   => $request -> name,
        'slug'   => Str::slug($request -> name)
      ]);
      
   

      return redirect() ->route ('admin.permission') ->with('success', 'Permission updated successfuly');
    }








}
