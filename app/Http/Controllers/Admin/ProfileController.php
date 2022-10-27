<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    /**
     * show login profile
     */

    public function showProfilePage()
    {
        return view('admin.profile.profile');
    }

    /**
     * Update Profile photo
     *   

       
     * 
     */
    public function uploadProfilePhoto(Request $request, $id)
    {    
         $data = Admin::findOrFail($id);

        if( $request -> hasFile('profile_photo') ){
            $img = $request -> file('profile_photo');
            $file_name = md5(time().rand()) .'.'. $img -> getClientOriginalExtension();
            $img -> move(storage_path('app/public/admins/'), $file_name);

          if( $data -> photo != 'avatar.webp'){
              unlink( 'storage/admins/' . $data -> photo);
           }

            $data -> update([
            
                'photo' => $file_name
            ]);

            return back();
    
        }
      
         return back();
        
    }



    /**
     * Pasword Change
     */

        public function passwordChange(Request $request, $id)
        {
            $admin_data = Admin::findOrFail($id);
            $this -> validate($request, [
                'old_password'              =>  'required',
                'password'                  =>  'required|confirmed',
                'password_confirmation'     =>  'required'
            ]);

            if(password_verify($request -> old_password , $admin_data -> password ) ==false ){
                return back() -> with('danger', 'Wrong old password');
            }else{
                $admin_data -> update([
                    'password' => Hash::make($request -> password)
                ]);
                return back() -> with('success', 'Password Change Successfuly');
            }
        }


}
