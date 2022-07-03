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
                                           
                                       <tr>
                                            <td>1</td>
                                            <td>Slider</td>
                                            <td>slider</td>
                                            <td>10 min ago</td>
                                            <td>
                                                <!----<a class="btn btn-sm btn-info" href="#"><i class="fe fe-eye"></i></a>-->
                                                <a class="btn btn-sm btn-warning" href="#"><i class="fe fe-edit"></i></a>
                                                <a class="btn btn-sm btn-danger" href="#"><i class="fe fe-trash"></i></a>
                                            </td>
                                       </tr>
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
									<form action="#">
										<div class="form-group">
											<label>Permission Name</label>
											<input type="text" class="form-control">
                                            <hr>
                                            <label for="" class="d-block">
                                                <input type="checkbox"> Slider
                                            </label>
                                            <label for="" class="d-block">
                                                <input type="checkbox"> Settings
                                            </label>
                                            <label for="" class="d-block">
                                                <input type="checkbox"> Users
                                            </label>
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
