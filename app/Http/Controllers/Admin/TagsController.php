<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Tag;

class TagsController extends Controller
{
    /**
     * Show All Tag
     */
    public function index()
    {
        $tags = Tag::latest() -> get();
        $type = 'add';
        return view('admin.post.tag.index', compact('tags', 'type'));
    }

    /**
     * Store Tag
     */
    public function store(Request $request)
    {
      $this -> validate($request, [
        'name'      => 'required'
      ]);
      Tag::create([
        'name'  => $request -> name,
        'slug'  => Str::slug($request -> name)

      ]);
      return back() -> with('success', 'Tag Created Successfuly');
    }
}
