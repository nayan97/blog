<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $sliders = Slider::latest() -> get();
        return view ('admin.slider.index',[
            'type'     => 'add',
            'sliders'  => $sliders
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
        $this -> validate($request,[
            'title'        => 'required',
            'subtitle'     => 'required',
            'photo'        => 'required',

        ]);


        //btn manegement

        $buttons = [];
        for( $i = 0; $i < count($request -> btn_title) ; $i++ ){
            array_push($buttons,[
                'btn_title'   => $request -> btn_title[$i],
                'btn_link'    => $request -> btn_link[$i],
                'btn_type'    => $request -> btn_type[$i]
            ]);
        }

    

        // image manegement
        if($request -> hasFile('photo')){

            $img =$request -> file('photo');
            $file_name = md5(time().rand()).'.'. $img -> clientExtension();

            $image = Image::make($img -> getRealPath());
            $image -> save (storage_path('app/public/sliders/'. $file_name));

        }
        // sider add
            Slider::create([
                'title'          => $request -> title,
                'Subtitle'       => $request -> subtitle,
                'photo'          => $file_name,
                'btns'           => json_encode($buttons)


            ]);

            // return back
            return back() -> with ('success', 'Slider added successfuly');
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
        $slider  =  slider::findOrFail($id);

    

        $sliders = Slider::latest() -> get();
        return view ('admin.slider.index',[
            'type'     => 'edit',
            'sliders'  => $sliders,
            'slider'   => $slider
        ]);
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
      
        $slider = Slider::findOrFail($id);

        //btn manegement

        $buttons = [];
        for( $i = 0; $i < count($request -> btn_title) ; $i++ ){
            array_push($buttons,[
                'btn_title'   => $request -> btn_title[$i],
                'btn_link'    => $request -> btn_link[$i],
                'btn_type'    => $request -> btn_type[$i]
            ]);
        }
            
        //update data
        $slider -> update([
            'title'          => $request -> title,
            'Subtitle'       => $request -> subtitle,
            'btns'           => json_encode($buttons)

        ]);

        return back() -> with ('success', 'Slider Data updated successfuly');
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