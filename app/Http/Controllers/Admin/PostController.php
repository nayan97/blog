<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
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
          'posts'  => $all_posts,
          'type'     => 'add'
        ]);
     }
}
