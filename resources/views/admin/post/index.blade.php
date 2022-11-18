@extends('admin.layouts.app')
@section('main-content')
	<!-- Page Wrapper -->
<div class="page-wrapper">
			
            <div class="content container-fluid">
                
          <!-- Page Header -->

                     @include('admin.layouts.page-header')
         
         <!-- /Page Header -->


                <div class="row">
						<div class="col-md-12">
               
                            <a class="btn btn-primary" href="{{ route ('post.create')}}"> Add New Post</a>
                            <br>
                            <br>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">All Posts</h4>
								</div>

								<div class="card-body">
                                    <table class="table table-striped">
                                        <thead> 

                                            @include('validate.success-main')
                                                <tr>
                                                <td>#</td>
                                                <td>Title</td>
                                                <td class="m-width:150">Author</td>
                                                <td>Tags</td>
                                                <td>Category</td>

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
                                                <a class="btn btn-sm btn-warning" href="{{ route ('admin.all.edit', $item ->id)}}"><i class="fe fe-edit"></i></a>
                                                <a class="btn btn-sm btn-danger delete-btn" href="{{route ('admin.all.destroy', $item ->id)}}"><i class="fe fe-trash"></i></a>
                                            </td>
                                       </tr>
                                       @empty
                                       <tr>
                                        <td colspan="7" class="text-center">
                                            <p>No Post Found</p>
                                        </td>
                                    </tr>
                                               
                                       @endforelse
                                        </tbody>
                                    </table>
								
								</div>
							</div>
						</div>
						
					</div>

               
                
            </div>			
        </div>
        
	<!-- /Page Wrapper -->

@endsection
