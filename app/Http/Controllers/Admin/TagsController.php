<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Show All Tag
     */
    public function index()
    {
        return view('admin.post.tag.index');
    }

    /**
     * Store Tag
     */
    public function store(Request $request)
    {
      return $request -> all(); 
    }
}
