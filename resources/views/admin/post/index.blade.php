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
                                                <td>Name</td>
                                                <td class="m-width:150">Email</td>
                                                <td>Cell</td>
                                                <td>Role</td>

                                                <td>Created at</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @php
                                                $all_data = [];
                                            @endphp
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
                                                <a class="btn btn-sm btn-warning" href="{{ route ('admin.all.edit', $item ->id)}}"><i class="fe fe-edit"></i></a>
                                                <a class="btn btn-sm btn-danger delete-btn" href="{{route ('admin.all.destroy', $item ->id)}}"><i class="fe fe-trash"></i></a>
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
						<div class="col-md-4">
                            
                            @if($type == 'add')
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Add new Users</h4>
								</div>
								<div class="card-body">
                                    @include('validate.error')
                                    @include('validate.success')
                                    <form action="{{ route ('admin.store')}}" method="POST">
                                        @csrf
									<div class="form-group">
											<label>Name</label>
											<input name= "name" type="text" class="form-control">
										</div>
                                        <div class="form-group">
											<label>Email</label>
											<input name="email" type="text" class="form-control">
										</div>
                                     
                                        <div class="form-group">
											<label>Cell</label>
											<input name="cell" type="text" class="form-control">
										</div>
                                        <div class="form-group">
											<label>User Nam</label>
											<input name="username" type="text" class="form-control">
										</div>
                                        <div class="form-group">
											<label>Password</label>
											<input name="password" type="password" class="form-control">
										</div>

                                        <div class="form-group">
											<label>Role</label>
                                            <select name="role" id="">
                                                <option  class="form-control" value="">-select-</option>
                                        
                                              
                                            </select>
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
											<label>Role</label>
                                            <select name="role" id="">
                                                <option  class="form-control" value="">-select-</option>
                                        
                                              
                                            </select>
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
