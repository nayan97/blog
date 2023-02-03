<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use App\Models\Portfolio;
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
        // show post by category
    public function showPostByCategory($slug)
    {
        $category = Category::where('slug', $slug) -> first();
        $posts = $category -> post;
        return view('frontend.pages.blog', [
            'posts'   =>  $posts
        ]);
        
    }
    // show post by category
    public function showPostByTag($slug)
    {
        $tag = Tag::where('slug', $slug) -> first();
        $posts = $tag -> post;
        return view('frontend.pages.blog', [
            'posts'   =>  $posts
        ]);
        
    }

        //show single post

    public function showSinglePost($slug)
    {
        $single_post = Post::where('slug', $slug) -> first();
            return view('frontend.pages.single-blog', [
            'post'   =>  $single_post
    ]);
    }




    

}


