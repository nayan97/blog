<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendPageController extends Controller
{
    public function showHomePage()
    {
        return view('frontend.pages.home');
    }


    // show contact us page
    public function showContactPage()
    {
        return view('frontend.pages.contact');
    }

}


