<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest() -> get();
        $cats = Category::latest() -> get();
        $tags = Tag::latest() -> get();
        return view('admin.post.index', [
            'type'           => 'add',
            'posts'          => $posts,
            'cats'           => $cats,
            'tags'           => $tags
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          // validate
          $this -> validate($request, [
            'title'         => 'required|unique:posts',
            'content'       => 'required',
        ]); 

        // uplaod standard post 
        if( $request -> hasFile('standard') ){
            $img = $request -> file('standard');
            $standard = md5(time().rand()) .'.'. $img -> clientExtension();

            $image = Image::make($img -> getRealPath());
            $image -> save(storage_path('app/public/posts/' . $standard) );
        }
                

                        // manage gallery post image 
                    $gallery_files = [];
                    if( $request -> hasFile('gallery') ){   
                        $gallery = $request -> file('gallery');

                        foreach( $gallery as $gall ){
                            $gall_name = md5(time().rand()) .'.'. $gall -> clientExtension();
                            $image = Image::make($gall -> getRealPath());
                            $image -> save(storage_path('app/public/posts/' . $gall_name) );
                            array_push($gallery_files, $gall_name);
                        }


                    } 
                // store 
                $post = Post::create([
                    'admin_id'      => Auth::guard('admin') -> user() -> id,
                    'title'         => $request -> title,
                    'slug'          => Str::slug($request -> title),
                    'content'       => $request -> content,
                
                ]);
        
              
                // return 
                return back() -> with('success' , 'Post Category Added successful');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
