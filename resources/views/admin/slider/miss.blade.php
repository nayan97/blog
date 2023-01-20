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


            // Logo manegement
            if($request -> hasFile('logo')){

            $img =$request -> file('logo');
            $file_name = md5(time().rand()).'.'. $img -> clientExtension();

            $image = Image::make($img -> getRealPath());
            $image -> save (storage_path('app/public/clients/'. $file_name));

        }
    
        //data store
        Client::create([
            'name' => $request -> name,
            'logo' => $request -> $file_name
        ]);
        return back() -> with('success','Clients added successfuly' );
        // store data 
            Client::create([
                'name'      => $request -> name,
                'logo'      => $file_name,
            ]);


        // index div 

        <div class="form-group">
											<label>Logo</label>
											<br>
										
											<img style="max-width:100%" id="slider-photo-preview" src="" alt="">
											<br>
										
											<input style="display:none;" name="logo" type="file" class="form-control" id="slider-photo">
											<label for="slider-photo">
                                                 <img class="" style="width:120px;cursor:pointer; margin-left: -10px !importent;" src="admin\assets\img\sohel.JPG" alt="">
											</label>
										</div>
    }

    $('#portfolio-gallery').change(function(e){
					
					const files = e.target.files;

						let gallery_ui = '';

						for( let i = 0; i < files.length ; i++ ) {
						const obj_url = URL.createObjectURL(files[i]);
						gallery_ui += `<img src="${ obj_url}">`;
				}
					$('p-gallery').html(gallery_ui);
					}); 
				});
