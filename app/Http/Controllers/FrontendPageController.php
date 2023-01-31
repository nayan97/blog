<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Models\Post;

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

    // show Portfolio page
    public function showSinglePortfolioPage($slug)
    {   
        $portfolio = Portfolio::where('slug', $slug) -> first();
        return view('frontend.pages.portfolios', [
            'portfolio'   =>  $portfolio
        ]);
        
    }
        // show Portfolio page
        public function showBlogPage()
        {   
            $posts = Post::latest() -> get();
            return view('frontend.pages.blog', [
                'posts'   =>  $posts
            ]);
            
        }
    




    

}


