@extends('admin.layouts.app')
@section('main-content')
	<!-- Page Wrapper -->
<div class="page-wrapper">
			
            <div class="content container-fluid">
                
          <!-- Page Header -->

                     @include('admin.layouts.page-header')
         
         <!-- /Page Header -->


                <div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">All Portfolios</h4>
								</div>

								<div class="card-body">
                                    <table class="table table-striped">
                                        <thead> 

                                            @include('validate.success-main')
                                                <tr>
                                                <td>#</td>
                                                <td>Title</td>
                                                <td>Fetured</td>
                                                <td>Client</td>
                                                <td>date</td>
                                                <td>Created at</td>
                                                <td>Status</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
											@forelse ( $portfolios as $item )
											<tr>
												<td>{{ $loop -> index + 1 }}</td>
												<td>{{$item -> name}}</td>
                                                <td><img style="width: 60px; height: 60px; object-fit: cover;" src="{{ url('storage/portfolios/' . $item -> featured)}}" alt=""></td>
												<td>{{$item -> client}}</td>
												<td>{{ date ('F d, Y', strtotime($item -> psd))}}</td>
												<td>{{ $item -> created_at -> diffForHumans() }}</td>
                                                
												<td>
                                            		@if($item -> status )
                                              		  <span class="badge badge-success">Publihsed</span>
                                               			 <a class="text-danger" href="#"><i class="fa fa-times"></i></a>
                                           			 @else 
                                                		<span class="badge badge-danger">Blocked User</span>
                                                	<a class="text-success" href="#"><i class="fa fa-check"></i></a>
                                            		@endif
                                       		
												</td>
												<td>
                                           			 {{-- <a class="btn btn-sm btn-info" href="#"><i class="fa fa-eye"></i></a> --}}
                                            

                                           				 <a class="btn btn-sm btn-warning" href="{{ route ('slider.edit', $item -> id )}}"><i class="fa fa-edit"></i></a>
                                            				<a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

                                            				{{-- <form action="#" class="d-inline delete-form" method="POST">
                                               		 @csrf
                                               		 @method('DELETE')
                                               		 <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                           		 </form> --}}
												</td>
												
											</tr>
												
											@empty
												
											@endforelse

                                        </tbody>
                                    </table>
								
								</div>
							</div>
						</div>
						<div class="col-md-4">

                            @if($type == 'add')
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Add new Portfolio</h4>
								</div>
								<div class="card-body">
                                    @include('validate.error')
                                    @include('validate.success')
                                    <form action="{{ route ('portfolio.store')}}" method="POST" enctype="multipart/form-data">
                                         @csrf
									    <div class="form-group">
											<label>Title</label>
											<input value="{{ old('name') }}" name= "name" type="text" class="form-control">
										</div>
                                        <div class="form-group">
											<label name="featured">Featured Photo</label>
											<br>
										
											<img class="p-img" id="slider-photo-preview" src="" alt="">
											<br><br>
										
											<input style="display:none;" name="photo" type="file" class="form-control" id="slider-photo">
											<label for="slider-photo">
                                                 <img class="" style="width:120px;cursor:pointer; margin-left: -10px !importent;" src="admin\assets\img\sohel.JPG" alt="">
											</label>
										</div>
                                        <div class="p-gallery">

                                        </div>
                                          
                                        <div class="form-group">
											<label name="gallery">Gallery</label>
											<br>
											<input style="display:none;" name="gallery" multiple type="file" class="form-control" id="portfolio-gallery">
											<label for="portfolio-gallery">
                                                 <img class="" style="width:120px;cursor:pointer; margin-left: -10px !importent;" src="admin\assets\img\sohel.JPG" alt="">
											</label>
										</div>
										<div class="form-group">
											<label>Project Category</label>
                                            <ul class="port-cat">
												@foreach ($portfooliocategories as $cat )
													<li>
														<label for=""><input name="cat[]" value="{{ $cat -> id}}" type="checkbox"> {{ $cat -> name}}</label>
													</li>
												@endforeach
											
											</ul>
										</div>
										<div class="form-group">
											<label>Project Descrpetion</label>
                                            <textarea name="prodesc" id="post_editor" cols="30" rows="10"></textarea>
										</div>
															

										<div class="form-group">
											<label>Project Steps</label>                        
											<div class="accordion" id="accordionExample">

												<div class="card portfolio-step shadow-sm">
													<div class="card-header" id="headingOne">
													<h6 style="cursor: pointer" class="mb-0" data-toggle="collapse" data-target="#collapseOne">
														Step 01
													</h6>
													</div>
												
													<div id="collapseOne" class="collapse" data-parent="#accordionExample">
													<div class="card-body">
														<div class="my-3">
														<label for="">Title</label>
														<input name="title[]" type="text" class="form-control">
														</div>
														<div class="my-3">
														<label for="">Description</label>
														<textarea name="desc[]" class="form-control"></textarea>
														</div>
													</div>
													</div>
												</div>

												<div class="card portfolio-step shadow-sm">
													<div class="card-header" id="headingOne">
														<h6 style="cursor: pointer" class="mb-0" data-toggle="collapse" data-target="#collapseTwo">
															Step 02
														</h6>
													</div>
												
													<div id="collapseTwo" class="collapse" data-parent="#accordionExample">
														<div class="card-body">
														<div class="my-3">
															<label for="">Title</label>
															<input name="title[]" type="text" class="form-control">
														</div>
														<div class="my-3">
															<label for="">Description</label>
															<textarea name="desc[]" class="form-control"></textarea>
														</div>
														</div>
													</div>
												</div>

												<div class="card portfolio-step shadow-sm">
													<div class="card-header" id="headingOne">
														<h6 style="cursor: pointer" class="mb-0" data-toggle="collapse" data-target="#collapseThree">
															Step 03
														</h6>
													</div>
												
													<div id="collapseThree" class="collapse" data-parent="#accordionExample">
														<div class="card-body">
														<div class="my-3">
															<label for="">Title</label>
															<input name="title[]" type="text" class="form-control">
														</div>
														<div class="my-3">
															<label for="">Description</label>
															<textarea name="desc[]" class="form-control"></textarea>
														</div>
														</div>
													</div>
												</div>
												

											</div>
										</div>
									
                                        <div class="form-group">
											<label>Client</label>
											<input value="{{ old('client') }}" name="client" type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Project Link</label>
											<input value="{{ old('link') }}" name="link" type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Project Type</label>
											<input value="{{ old('type') }}" name="type" type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Date of submit</label>
											<input  value="{{ old('date') }}" name="date" type="date" class="form-control">
										</div>
									
                                      
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
                            @endif

							@if($type == 'edit')
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Edit Slider</h4>
								</div>
								<div class="card-body">
                                    @include('validate.error')
                                    @include('validate.success')
                                    <form action="{{ route ('slider.update', $slider -> id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
										@method('PUT')
									<div class="form-group">
											<label>Title</label>
											<input value="{{ $slider -> title }}" name= "title" type="text" class="form-control">
										</div>
                                        <div class="form-group">
											<label>Sub Title</label>
											<input value="{{ $slider -> subtitle }}" name="subtitle" type="text" class="form-control">
										</div>
                                     
                                        <div class="form-group">
											<label name="photo">Photo</label>
											<br>
										
											<img style="max-width:100%" id="slider-photo-preview" src="{{ url('storage/sliders/' . $slider -> photo)}}" alt="">
											<br>
										
											<input style="display:none;" name="photo" type="file" class="form-control" id="slider-photo">
											<label for="slider-photo">
                                                 <img class="" style="width:120px;cursor:pointer; margin-left: -10px !importent;" src="admin\assets\img\sohel.JPG" alt="">
											</label>
										</div>
										<hr>
										<div class="form-group slider-btn-opt">
									
											@foreach ( json_decode($slider -> btns) as $btn )
												<div class="btn-opt-area">
													<span>Button #</span>
													<input class="form-control" value="{{ $btn -> btn_title}}"  name="btn_title[]" type="text" placeholder="Button Title"><br>
													<input class="form-control" value="{{ $btn -> btn_title}}" name="btn_link[]" type="text" placeholder="Button Link"><br> 
													<select class="form-control" name="btn_type[]">
														<option @if ($btn -> btn_type === 'btn-light-out') selected @endif value="btn-light-out">Default</option>
														<option @if ($btn -> btn_type === 'btn-color btn-full') selected @endif value="btn-color btn-full">Red</option>
													</select>
												</div>
													
											@endforeach
																
										
										</div>
                                      
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
                            @endif

                          
                        
                        </div>
					</div>

               
                
            </div>			
        </div>
        
	<!-- /Page Wrapper -->

@endsection
