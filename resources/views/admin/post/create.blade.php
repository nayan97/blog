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
									<h4 class="card-title">Add New Post</h4>
								</div>
								<div class="card-body">
                                    @include('validate.error')
                                    @include('validate.success')
                                    <form action="#" method="POST">
                                        @csrf
									<div class="form-group">
											<label>Title</label>
											<input name= "name" type="text" class="form-control">
										</div>
                                     
                                        <div class="form-group">
											<label>Content</label>
                                            <textarea name="" id="post_editor" cols="30" rows="10"></textarea>
										</div>
                                        <div class="form-group">
											<label>Category</label>
											<input name="username" type="text" class="form-control">
										</div>
                                        <div class="form-group">
											<label>Tags</label>
											<input name="password" type="password" class="form-control">
										</div>

										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
                        
						
                        
                        </div>
                        <div class="col-md-4">
                        
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">category</h4>
								</div>
								<div class="card-body">
                                   <ul style= "list-style:none">
                                    @forelse($cats as $cat)

                                    <li><label> <input value="{{ $cat -> id }}" type="checkbox">{{ $cat -> name }}</label></li>

                                    @empty

                                    @endforelse
                                   </ul>
                                    
								</div>
							</div>
                            <div class="card">
								<div class="card-header">
									<h4 class="card-title">Tags</h4>
								</div>
								<div class="card-body">
                                    <select class="form-control" name="" id="tags" multiple>
                                    @forelse($tags as $tag)
                                    <option value="{{ $tag -> id }}"> {{ $tag -> name}}</option>


                                    @empty

                                    @endforelse
                                     
                                    </select>
                                    
								</div>
							</div>
                        
                        
						
                        
                        </div>
					</div>

               
                
            </div>			
        </div>
        
	<!-- /Page Wrapper -->

@endsection
