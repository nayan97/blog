<?php

namespace App\Http\Controllers\Admin;

use App\Models\Portfolio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Portfooliocategory;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::latest() -> get();
        $portfooliocategories = Portfooliocategory::latest() -> get();
        return view('admin.portfolio.index', [
            'portfolios'             => $portfolios,
            'type'                   => 'add',
            'portfooliocategories'   => $portfooliocategories
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
        // validation
        $this -> validate($request, [
            'name'   => ['required'],
            'photo'  => ['required'],
            'cat'    => ['required']

       ]);


                // image manegement
                if($request -> hasFile('photo')){

                    $img =$request -> file('photo');
                    $file_name = md5(time().rand()).'.'. $img -> clientExtension();
        
                    $image = Image::make($img -> getRealPath());
                    $image -> save (storage_path('app/public/portfolios/'. $file_name));
        
                }

                // gallery manegement
                    $gallery_files = [];
                if($request -> hasFile('gallery')){
                    $gallery =$request -> file('gallery');

                    foreach ($gallery as $gall ) {
                        $gall_name = md5(time().rand()).'.'. $gall -> clientExtension();

                        $image = Image::make($gall -> getRealPath());
                         $image -> save (storage_path('app/public/portfolios/'. $gall_name));
                         array_push($gallery_files, $gall_name);
                    }
                }
        // steps Manegement
                $steps = [];
            if (isset($request -> title)) {

              for ($i=0; $i < count($request -> title); $i++) { 
                array_push($steps,[
                    'title'  => $request -> title[$i],
                    'desc'   => $request -> desc[$i]
                ]);
              }
            }



        // store Data

        $portfolio = Portfolio::create([
                'name'      => $request -> name,
                'slug'      => Str::slug($request -> name),
                'featured'  => $file_name,
                'gallery'    => json_encode($gallery_files),
                'steps'      => json_encode($steps),
                'desc'       => $request -> prodesc,
                'client'     => $request -> client,
                'link'       => $request -> link,
                'psd'        => $request -> date,
                'type'       => $request -> type,



        ]);

        $portfolio -> Portfooliocategory() -> attach($request -> cat);

        // return back
            return back() -> with ('success', 'Portfolio added successfuly');
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
