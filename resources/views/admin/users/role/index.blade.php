@extends('admin.layouts.app')
@section('main-content')
	<!-- Page Wrapper -->
<div class="page-wrapper">
			
            <div class="content container-fluid">
                
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Welcome Admin!</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <div class="row">
						<div class="col-md-7">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">All Role</h4>
								</div>
								<div class="card-body">
                                    <table class="table table-striped">
                                        <thead> 
                                                <tr>
                                                <td>#</td>
                                                <td>Name</td>
                                                <td>Slug</td>
                                                <td>Created at</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @forelse ($roles as $item)
                                        <tr>
                                            <td>{{$loop ->index + 1}}</td>
                                            <td>{{$item -> name}}</td>
                                            <td>{{$item -> slug}}</td>
                                            <td>{{$item -> created_at -> diffForHumans()}}</td>
                                            <td>
                                                <!----<a class="btn btn-sm btn-info" href="#"><i class="fe fe-eye"></i></a>-->
                                                <a class="btn btn-sm btn-warning" href="#"><i class="fe fe-edit"></i></a>
                                                <a class="btn btn-sm btn-danger" href="#"><i class="fe fe-trash"></i></a>
                                            </td>
                                       </tr> 
                                        @empty
                                            
                                        @endforelse
                                           
                                     
                                        </tbody>
                                    </table>
								
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Add new Role</h4>
								</div>
								<div class="card-body">


                                @include('validate.success')
                                @include('validate.error')
									<form action="{{route ('admin.role.store')}}" method="POST">
                                        @csrf
										<div class="form-group">
											<label>Permission Name</label>
											<input name="name" type="text" class="form-control">
                                            <hr>

                                            @forelse ($permissions as $item)

                                            <label for="" class="d-block"><input name="per[]" value="{{ $item -> name}}" type="checkbox"> {{ $item -> name}}</label>

                                            @empty
                                                <p>No Permission Found</p>
                                            @endforelse
                                        
										</div>
									
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

               
                
            </div>			
        </div>
        
	<!-- /Page Wrapper -->

@endsection
