@extends('admin.layouts.app')
@section('main-content')
	<!-- Page Wrapper -->
<div class="page-wrapper">
			
            <div class="content container-fluid">
                
                     <!-- Page Header -->

                     @include('admin.layouts.page-header')

                     <!-- /Page Header -->
                <div class="row">
						<div class="col-md-7">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">All Role</h4>
								</div>
								<div class="card-body">
                                    
                                    @include('validate.success-main')


                                    <table class="table table-striped">
                                        <thead> 
                                                <tr>
                                                <td>#</td>
                                                <td>Name</td>
                                                <td>Slug</td>
                                                <td>Permissions</td>
                                                <td>Created at</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @forelse ($roles as $item)
                                        <tr>
                                            <td>{{$loop ->index + 1}}</td>
                                            <td>{{$item -> slug}}</td>
                                            <td>{{$item -> name}}</td>
                                            <td>
                                                <ul>
                                                       
                                                    @forelse (json_decode($item -> permission) as $per) 
                                                    <li>{{ $per }}</li>
                                                  @empty
                                                  <li style="list-style:none;">No permission found</li>
                                                  @endforelse
                                                </ul>
                          
                                        

                                        
                                            </td>
                                            
                                            <td>{{$item -> created_at -> diffForHumans()}}</td>
                                            <td>
                                                <!----<a class="btn btn-sm btn-info" href="#"><i class="fe fe-eye"></i></a>-->
                                                <a class="btn btn-sm btn-warning" href="{{ route('admin.role.edit', $item -> id)}}"><i class="fe fe-edit"></i></a>
                                                <a class="btn btn-sm btn-danger" href="{{ route('admin.role.destroy', $item -> id)}}"><i class="fe fe-trash"></i></a>
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

                            @if( $type === 'add')
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
											<label>Role Name</label>
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
                            @endif
                            
                            @if( $type === 'edit')
							<div class="card">
								<div class="card-header">
									<h4 class="card-title"> Edit Role</h4>
                                    <a class="btn btn-primary btn-md" href="{{route('admin.role')}}">Add New Role</a>
								</div>
								<div class="card-body">


                                @include('validate.success')
                                @include('validate.error')
									<form action="{{route ('admin.role.update', $role -> id)}}" method="POST">
                                        @csrf
										<div class="form-group">
											<label>Role Name</label>
											<input name="name" type="text" value=" {{ $role -> name}}" class="form-control">
                                            <hr>

                                            @forelse ($permissions as $item)

                                            <label class="d-block">
                                                <input name="per[]" @if( in_array($item -> name, json_decode($role -> permission )) ) checked @endif  value="{{ $item -> name }}" type="checkbox">
                                                {{ $item -> name }}
                                            </label>

                                            @empty
                                                <p>No Role Data Found</p>
                                            @endforelse
                                        
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
