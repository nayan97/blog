<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
       /**
     * show Login From
     */
    public function ShowLoginForm()
    {
        return view('admin.login');
    }

           /**
     * show login System
     */
    public function AdminLoginSystem(Request $request)
    {
       $this -> validate($request,[
            'email'    => 'required|email',
            'password' => 'required'
       ]);

       if(Auth::guard('admin') -> attempt(['email' => $request -> email, 'password' => $request -> password])){

        return redirect () -> route('admin.dashboard');

       }else{
        return redirect () -> route('admin.login') -> with ('error', 'Wrong Email or Password');
       }
    }

}
