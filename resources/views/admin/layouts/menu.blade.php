@php
	

		$permissions = json_decode(	Auth::guard('admin') -> user() -> role -> permission);
@endphp





<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
						
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="active"> 
								<a href="{{ route('admin.dashboard') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
					
					
							<li class="menu-title"> 
								<span>Pages</span>
							</li>
							<li> 
								<a href="{{ route('admin.profile')}}"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
							</li>
					
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{route ('admin.all')}}"> Admin User </a></li>
									<li><a href="{{route ('admin.role')}}"> Role </a></li>
									<li><a href="{{route ('admin.permission')}}"> Permision </a></li>
								</ul>
							</li>
							
							<li class="submenu">
								<a href="#"><i class="fe fe-warning"></i> <span>Posts</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{ route ('post.index')}}">Posts</a></li>
									<li><a href="{{ route ('post.tag.index')}}">Tags</a></li>
									<li><a href="{{ route ('post.category.index')}}">Category</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-warning"></i> <span>Portfolio</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="#">Posts</a></li>
									<li><a href="{{ route ('post.tag.index')}}">Tags</a></li>
									<li><a href="{{ route ('portfolio-category.index')}}">Category</a></li>
								</ul>
							</li>
							@if(in_array('Posts', $permissions))
							<li> 
								<a href="blank-page.html"><i class="fe fe-file"></i> <span>Posts</span></a>
							</li>
							@endif

							@if(in_array('Orders', $permissions))
							<li> 
								<a href="blank-page.html"><i class="fe fe-file"></i> <span>Orders</span></a>
							</li>
							@endif

							@if(in_array('Clients', $permissions))
							<li> 
								<a href="{{ route ('client.index')}}"><i class="fe fe-file"></i> <span>Our Client</span></a>
							</li>
							@endif
							@if(in_array('Counter', $permissions))
							<li> 
								<a href="{{ route ('counter.index')}}"><i class="fe fe-file"></i> <span>Counter</span></a>
							</li>
							@endif
							@if(in_array('Slider', $permissions))
							<li> 
								<a href="{{ route ('slider.index')}}"><i class="fe fe-file"></i> <span>Slider</span></a>
							</li>
							@endif
							@if(in_array('Testimonials', $permissions))
							<li> 
								<a href="{{ route('testimonial.index')}}"><i class="fe fe-file"></i> <span>Testimonials</span></a>
							</li>
							@endif
							@if(in_array('Our Team', $permissions))
							<li> 
								<a href="blank-page.html"><i class="fe fe-file"></i> <span>Our Team</span></a>
							</li>
							@endif
							<li> 
								<a href="{{ route('admin.logout.system')}}"><i class="fe fe-logout"></i> <span>Logout</span></a>
							</li>
					
					
						</ul>
					</div>
                </div>
            </div>