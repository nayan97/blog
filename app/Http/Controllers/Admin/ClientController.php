<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Admin\ClientController;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::latest() -> get();
        return view('admin.client.index', [
            'clients'       => $clients,
            'type'          => 'add'
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
            'name'   => 'required',
            'logo'   => 'required'
            
        ]);


                 // logo image manage 
        if( $request -> hasFile('logo') ){

            $img = $request -> file('logo');
            $file_name = md5(time().rand()) .'.'. $img -> clientExtension();

            $image = Image::make($img -> getRealPath());
            $image -> save(storage_path('app/public/clients/' . $file_name) );

            
        }
    
            // store data 
            Client::create([
                'name'      => $request -> name,
                'logo'      => $file_name,
            ]);
    
            return back() -> with('success',  'Client added successful');
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
