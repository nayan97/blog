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
									<h4 class="card-title">All Users</h4>
								</div>

								<div class="card-body">
                                    <table class="table table-striped">
                                        <thead> 

                                            @include('validate.success-main')
                                                <tr>
                                                <td>#</td>
                                                <td>Title</td>
                                                <td>Photo</td>
                                                <td>Created at</td>
                                                <td>Status</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
								
								</div>
							</div>
						</div>
						<div class="col-md-4">

                            @if($type == 'add')
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Add new Users</h4>
								</div>
								<div class="card-body">
                                    @include('validate.error')
                                    @include('validate.success')
                                    <form action="{{ route ('slider.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
									<div class="form-group">
											<label>Title</label>
											<input name= "name" type="text" class="form-control">
										</div>
                                        <div class="form-group">
											<label>Sub Title</label>
											<input name="subtitle" type="text" class="form-control">
										</div>
                                     
                                        <div class="form-group">
											<label>Photo</label>
											<br>
										
											<img style="max-width:100%" id="slider-photo-preview" src="" alt="">
											<br>
										
											<input style="display:none;" name="photo" type="file" class="form-control" id="slider-photo">
											<label for="slider-photo">
                                                 <img class="" style="width:120px;cursor:pointer; margin-left: -10px !importent;" src="https://t4.ftcdn.net/jpg/02/83/72/41/360_F_283724163_kIWm6DfeFN0zhm8Pc0xelROcxxbAiEFI.jpg" alt="">
											</label>
										</div>
										<hr>
										<div class="form-group slider-btn-opt">
									

										<a id="add-new-slider-button" class="btn btn-sm btn-info" href="#">Add Slider Button</a>
										
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
								<div class="card-header d-flex justify-content-between">
									<h4 class="card-title">Edit User Data</h4>
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.all')}}"> Add New User</a>
								</div>
								<div class="card-body">
                                    @include('validate.error')
                                    @include('validate.success')
                                    <form action="{{ route ('admin.update', $admin  -> id)}}" method="POST">
                                        @csrf
									<div class="form-group">
											<label>Name</label>
											<input name= "name" value="{{ $admin-> name}}" type="text" class="form-control">
										</div>
                                        <div class="form-group">
											<label>Email</label>
											<input name="email" value="{{ $admin-> email}}"  type="text" class="form-control">
										</div>
                                     
                                        <div class="form-group">
											<label>Cell</label>
											<input name="cell" value="{{ $admin-> cell}}" type="text" class="form-control">
										</div>
                                        <div class="form-group">
											<label>User Nam</label>
											<input name="username" value="{{ $admin-> username}}" type="text" class="form-control">
										</div>
                                        <div class="form-group">
											<label>Password</label>
											<input name="password" type="password" class="form-control">
										</div>
										<div class="form-group">
											<label>Password</label>
											<input name="password" type="password" class="form-control">
										</div>

                                      
									
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Update</button>
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
