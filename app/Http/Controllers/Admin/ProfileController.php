<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

}
