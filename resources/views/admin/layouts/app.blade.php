<!DOCTYPE html>
<html lang="en">
    
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Doccure - Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/img/favicon.png')}}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset ('admin/assets/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset ('admin/assets/css/font-awesome.min.css')}}">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/feathericon.min.css')}}">
		
		<link rel="stylesheet" href="{{ asset('admin/assets/plugins/morris/morris.css')}}">
		<link rel="stylesheet" href="{{ asset('admin/assets/icon/themify-icons.css') }}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css')}}">
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

		
		<!--[if lt IE 9]>
			<script src="{{ asset('admin/assets/js/html5shiv.min.js')}}"></script>
			<script src="{{ asset('admin/assets/js/respond.min.js')}}"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
             @include('admin.layouts.header')
			<!-- /Header -->
			
			<!-- Sidebar -->
            @include('admin.layouts.menu')
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
			@section('main-content')
			@show

			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{ asset('admin/assets/js/jquery-3.2.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{ asset('admin/assets/js/popper.min.js')}}"></script>
        <script src="{{ asset('admin/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{ asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		
		<script src="{{ asset('admin/assets/plugins/raphael/raphael.min.js')}}"></script>    
		<script src="{{ asset('admin/assets/plugins/morris/morris.min.js')}}"></script>  
		<script src="{{ asset('admin/assets/js/chart.morris.js')}}"></script>
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="{{ asset ('admin/assets/ckeditor/ckeditor.js')}}"></script>
		<script  src="{{ asset ('admin/assets/js/script.js')}}"></script>
		<script  src="{{ asset('custom/admin.js') }}"></script>
		<script>
			CKEDITOR.replace('post_editor');

			$(document).ready(function() {
   			 $('#tags').select2();
			});

			$('#slider-photo').change(function(e){

				
	
			const photo_url = URL.createObjectURL(e.target.files[0]);
			
			$('#slider-photo-preview').attr('src', photo_url);

				});

			// add new slider button

			let btn_no =1;	
			$('#add-new-slider-button').click(function(e){

				e.preventDefault();

			if(btn_no <= 2 ){
		

				$('.slider-btn-opt').append(`		
				<div class="btn-opt-area">
					<span>Button #${ btn_no }</span>
					<input class="form-control"  name="btn_title[]" type="text" placeholder="Button Title"><br>
					<input class="form-control" name="btn_link[]" type="text" placeholder="Button Link"><br> 
					<select class="form-control" name="btn_type[]">
						<option value="btn-light-out">Default</option>
						<option value="btn-color btn-full">Red</option>
					</select>
				</div>
				`);
				btn_no++;
			}else{
				alert(` You Can not take more btn`);
			}
				});


				//counter 
				$('button.show-icon').click(function (e) {
					e.preventDefault();
					$('#select-icon').modal('show')
				});

				// add icon
				$('.select-icon-haq .preview-icon code').click (function () {

					let icon_name = $(this).html();
					$('.select-haq-icon-input').val(icon_name);
					$('#select-icon').modal('hide');

				});
				
				// port gall
				$('#portfolio-gallery').change(function(e){
					
					const files = e.target.files;

						let gallery_ui = '';

						for( let i = 0; i < files.length ; i++ ) {
						const obj_url = URL.createObjectURL(files[i]);
						gallery_ui += `<img src="${ obj_url}">`;
				}
					$('.p-gallery').html(gallery_ui);
					}); 
					

			
		</script>
	

		
    </body>
 
</html> 