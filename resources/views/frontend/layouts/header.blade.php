@php
  $theme_data = App\Models\Theme::find(1)
@endphp  
  
  
  <!-- Navigation Bar-->
    <header id="topnav">
      <div class="container">
        <!-- Logo container-->
        <div class="logo">
          <a href="{{ route ('home.page')}}">
            @if ($theme_data -> logo === 'logo.png')
              <img src="{{ url ('frontend/images/logo_light.png')}}" alt="" class="logo-light">
              <img src="{{ url ('frontend/images/logo_dark.png')}}" alt="" class="logo-dark">
            @else
              <img src="{{ url ('storage/logo/' . $theme_data ) }}" alt="" class="logo-light">
            @endif
            
      
          </a>
        </div>
        <!-- End Logo container-->
        <div class="menu-extras">
          <div class="menu-item">
            <!-- Shopping cart-->
   
            <!-- End shopping cart-->
          </div>
          <div class="menu-item">
            <!-- Search Form-->
            @if ($theme_data -> search === true)
              <div class="search">
                <a href="#">
                  <i class="ti-search"></i>
                </a>
                <div class="search-form">
                  <form action="#" class="inline-form">
                    <div class="input-group">
                      <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn"><button type="button" class="btn btn-color"><span><i class="ti-search"></i></span>
                      </button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
            @endif
         
            <!-- End search form-->
          </div>
          <div class="menu-item">
            <!-- Mobile menu toggle-->
            <a class="navbar-toggle">
              <div class="lines">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </a>
            <!-- End mobile menu toggle-->
          </div>
        </div>
        <div id="navigation">
          <!-- Navigation Menu-->
          <ul class="navigation-menu">
            <li class="">
              <a href="{{ route ('home.page')}}">Home</a>
          
            </li>
            <li>
              <a href="page-about.html">About</a>
            </li>
            <li>
              <a href="#">About</a>
            </li>
            <li>
              <a href="page-services.html">Services</a>
            </li>
            <li>
              <a href="{{ route('blog.page')}}">Blog</a>
            </li>
            <li>
              <a href="{{ route('contact.page')}}">Contact</a>
            </li>
           
          </ul>
          <!-- End navigation menu        -->
        </div>
      </div>
    </header>
    <!-- End Navigation Bar-->