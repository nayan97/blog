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
									<h4 class="card-title">All Counter</h4>
								</div>

								<div class="card-body">
                                    <table class="table table-striped">
                                        <thead> 

                                            @include('validate.success-main')
                                                <tr>
                                                <td>#</td>
                                                <td>Title</td>
                                                <td>slug</td>
                                                <td>Created at</td>
                                                <td>Status</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
											@foreach ($portfooliocategories as $item )
											<tr>
												<td>{{$loop -> index +1}}</td>
												<td>{{$item -> name}}</td>
                                                <td>{{$item -> slug}}</td>
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
                                            

                                           				 <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                                            				<a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

                                            				{{-- <form action="#" class="d-inline delete-form" method="POST">
                                               		 @csrf
                                               		 @method('DELETE')
                                               		 <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                           		 </form> --}}
												</td>
											</tr>
												
											@endforeach

                                        </tbody>
                                    </table>
								
								</div>
							</div>
						</div>
						<div class="col-md-4">

                            @if($type == 'add')
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Add new Category</h4>
								</div>
								<div class="card-body">
                                    @include('validate.error')
                                    @include('validate.success')
                                    <form action="{{ route ('portfolio-category.store')}}" method="POST">
                                        @csrf
									<div class="form-group">
											<label>Title</label>
											<input value="{{ old('name') }}" name= "name" type="text" class="form-control">
										</div>
                                        <div class="form-group">
														
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
