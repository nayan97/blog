<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $all_data = Category::latest() -> get();
        $form_type ='add';
        return view('admin.post.category.index', compact('all_data', 'form_type'));
    }
    public function store(Request $request)
    {
      $this -> validate($request, [
        'name'      => 'required'
      ]);
      Category::create([
        'name'  => $request -> name,
        'slug'  => Str::slug($request -> name)

      ]);
      return back() -> with('success', 'Category Created Successfuly');
    }
}

