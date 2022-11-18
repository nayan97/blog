<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * show index
     */

     public function index()
     {   $all_posts = Post::latest() -> get();
        return view('admin.post.index',[
          'all_data'  => $all_posts,
          'type'     => 'add'
        ]);
     }
      
     /**
     * show index
     */
     public function create()
     {
      $cats = Category::all();
      $tags = Tag::all();
      return view('admin.post.create', [
            'cats'   => $cats,
            'tags'   => $tags,
      ]);
     }
}
