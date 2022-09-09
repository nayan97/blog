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
                                <li class="breadcrumb-item active">Admin Users</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <div class="row">
						<div class="col-md-7">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">All Users</h4>
								</div>
								<div class="card-body">
                                    <table class="table table-striped">
                                        <thead> 
                                                <tr>
                                                <td>#</td>
                                                <td>Name</td>
                                                <td>Email</td>
                                                <td>Cell</td>
                                                <td>Role</td>

                                                <td>Created at</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @forelse ( $all_data as $item )
                                               
                                        
                                       <tr>
                                            <td>{{ $loop -> index +1}}</td>
                                            <td>{{ $item -> name }}</td>
                                            <td>{{ $item -> email }}</td>
                                            <td>{{ $item -> cell }}</td>
                                            <td>{{ $item -> role -> name }}</td>
                                            <td>{{ $item -> created_at -> diffForHumans()}}</td>

                                            <td>
                                                <!----<a class="btn btn-sm btn-info" href="#"><i class="fe fe-eye"></i></a>-->
                                                <a class="btn btn-sm btn-warning" href="#"><i class="fe fe-edit"></i></a>
                                                <a class="btn btn-sm btn-danger" href="#"><i class="fe fe-trash"></i></a>
                                            </td>
                                       </tr>
                                       @empty
                                       <tr>
                                        <td colspan="6" class="text-center">
                                            <p>No Role Data Found</p>
                                        </td>
                                    </tr>
                                               
                                       @endforelse
                                        </tbody>
                                    </table>
								
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Add new Users</h4>
								</div>
								<div class="card-body">
									<form action="#">
									<div class="form-group">
											<label>Name</label>
											<input type="text" class="form-control">
										</div>
                                        <div class="form-group">
											<label>Email</label>
											<input type="text" class="form-control">
										</div>
                                        <div class="form-group">
											<label>User Name</label>
											<input type="text" class="form-control">
										</div>
                                        <div class="form-group">
											<label>Cell</label>
											<input type="text" class="form-control">
										</div>
                                        <div class="form-group">
											<label>Password</label>
											<input type="password" class="form-control">
										</div>

                                        <div class="form-group">
											<label>Role</label>
                                            <select name="" id="">
                                                <option  class="form-control" value="">-select-</option>
                                                @forelse ( $roles as $role)
                                                <option  class="form-control" value="{{$role -> id }}">{{$role -> name}}</option>  
                                                @empty
                                                <option  class="form-control" value="">Roles Empty</option>
                                                @endforelse
                                              
                                            </select>
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
