<?php

namespace App\Http\Controllers\Admin;

use App\Models\Theme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theme = Theme::findOrFail(1);
        return view('admin.theme.index', [
            'theme' => $theme,
         
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
        //
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
        $theme = Theme::findOrFail(1);

                // Logo manegement
                if($request -> hasFile('logo')){

                    $img =$request -> file('logo');
                    $file_name = md5(time().rand()).'.'. $img -> clientExtension();
        
                    $image = Image::make($img -> getRealPath());
                    $image -> save (storage_path('app/public/logo/'. $file_name));
        
                }

                $social = [
                    'fb'    => $request -> fb ?? '',
                    'din'   => $request -> din ?? '',
                    'tw'    => $request -> tw ?? '',
                    'wapp'  => $request -> wapp ?? '',
                    'ins'   => $request -> ins ?? '',
                ];

                $theme -> update([ 
                    'title'    => $request -> title,
                    'tagline'  => $request -> tagline,
                    'copyright'  => $request -> copyright,
                    'logo'     => $file_name ?? 'logo.png',
                    'social'   => json_encode($social)

                ]);
                return back() -> with('success', 'Theme data updated Successfully');
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
