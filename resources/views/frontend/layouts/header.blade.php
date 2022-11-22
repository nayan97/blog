    <!-- Navigation Bar-->
    <header id="topnav">
      <div class="container">
        <!-- Logo container-->
        <div class="logo">
          <a href="{{ route ('home.page')}}">
            <img src="{{ url ('frontend/images/logo_light.png')}}" alt="" class="logo-light">
            <img src="frontend/images/logo_dark.png" alt="" class="logo-dark">
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
            <li class="has-submenu">
              <a href="#">Pages</a>
              <ul class="submenu megamenu">
                <li>
                  <ul>
                    <li>
                      <span>Pages</span>
                    </li>
                    <li>
                      <a href="page-about.html">About Us</a>
                    </li>
                    <li>
                      <a href="page-about-2.html">About Us 2</a>
                    </li>
                    <li>
                      <a href="page-services.html">Services</a>
                    </li>
                    <li>
                      <a href="page-services-2.html">Services 2</a>
                    </li>
                    <li>
                      <a href="page-contact.html">Contact</a>
                    </li>
                    <li>
                      <a href="page-contact-2.html">Contact 2</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <ul>
                    <li>
                      <span>Other Pages</span>
                    </li>
                    <li>
                      <a href="page-pricing.html">Pricing</a>
                    </li>
                    <li>
                      <a href="page-careers.html">Careers</a>
                    </li>
                    <li>
                      <a href="page-login.html">Login / Register</a>
                    </li>
                    <li>
                      <a href="page-coming-soon.html">Coming Soon</a>
                    </li>
                    <li>
                      <a href="page-404.html">Error 404</a>
                    </li>
                    <li>
                      <a href="page-faq.html">Faq</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Elements</a>
              <ul class="submenu megamenu">
                <li>
                  <ul>
                    <li>
                      <span>Elements</span>
                    </li>
                    <li>
                      <a href="elements-accordions.html"><i class="ti-layout-accordion-merged"></i>Accordions</a>
                    </li>
                    <li>
                      <a href="elements-alerts.html"><i class="ti-comment-alt"></i>Alerts</a>
                    </li>
                    <li>
                      <a href="elements-buttons.html"><i class="ti-control-play"></i>Buttons</a>
                    </li>
                    <li>
                      <a href="elements-countdowns.html"><i class="ti-timer"></i>Countdowns </a>
                    </li>
                    <li>
                      <a href="elements-features.html"><i class="ti-view-grid"></i>Features Box</a>
                    </li>
                    <li>
                      <a href="elements-forms.html"><i class="ti-layout-cta-left"></i>Forms</a>
                    </li>
                    <li>
                      <a href="elements-grid.html"><i class="ti-layout"></i>Grid</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <ul>
                    <li>
                      <span>Elements</span>
                    </li>
                    <li>
                      <a href="elements-icons.html"><i class="ti-image"></i>Icons </a>
                    </li>
                    <li>
                      <a href="elements-media.html"><i class="ti-volume"></i>Media Elements</a>
                    </li>
                    <li>
                      <a href="elements-titles.html"><i class="ti-uppercase"></i>Page Titles</a>
                    </li>
                    <li>
                      <a href="elements-bars.html"><i class="ti-align-left"></i>Progress Bars</a>
                    </li>
                    <li>
                      <a href="elements-sliders.html"><i class="ti-layout-slider"></i>Sliders &amp; Galleries</a>
                    </li>
                    <li>
                      <a href="elements-tabs.html"><i class="ti-layout-tab-window"></i>Tabs</a>
                    </li>
                    <li>
                      <a href="elements-typography.html"><i class="ti-paragraph"></i>Typography</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Portfolio</a>
              <ul class="submenu">
                <li class="has-submenu">
                  <a href="#">Boxed</a>
                  <ul class="submenu">
                    <li>
                      <a href="portfolio-boxed-2col.html">2 Columns</a>
                    </li>
                    <li>
                      <a href="portfolio-boxed-3col.html">3 Columns</a>
                    </li>
                  </ul>
                </li>
                <li class="has-submenu">
                  <a href="#">Wide</a>
                  <ul class="submenu">
                    <li>
                      <a href="portfolio-wide-2col.html">2 Columns</a>
                    </li>
                    <li>
                      <a href="portfolio-wide-3col.html">3 Columns</a>
                    </li>
                  </ul>
                </li>
                <li class="has-submenu">
                  <a href="#">Single</a>
                  <ul class="submenu">
                    <li>
                      <a href="portfolio-single-1.html">Single Work 1</a>
                    </li>
                    <li>
                      <a href="portfolio-single-2.html">Single Work 2</a>
                    </li>
                    <li>
                      <a href="portfolio-single-3.html">Single Work 3</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Blog</a>
              <ul class="submenu">
                <li>
                  <a href="blog-fixed-image.html">Fixed Image</a>
                </li>
                <li class="has-submenu">
                  <a href="#">Classic</a>
                  <ul class="submenu">
                    <li>
                      <a href="blog.html">No Sidebar</a>
                    </li>
                    <li>
                      <a href="blog-sidebar.html">Right Sidebar</a>
                    </li>
                    <li>
                      <a href="blog-sidebar-left.html">Left Sidebar</a>
                    </li>
                  </ul>
                </li>
                <li class="has-submenu">
                  <a href="#">Masonry</a>
                  <ul class="submenu">
                    <li>
                      <a href="blog-masonry.html">No Sidebar</a>
                    </li>
                    <li>
                      <a href="blog-masonry-sidebar.html">Right Sidebar</a>
                    </li>
                    <li>
                      <a href="blog-masonry-sidebar-left.html">Left Sidebar</a>
                    </li>
                  </ul>
                </li>
                <li class="has-submenu">
                  <a href="#">Single Post</a>
                  <ul class="submenu">
                    <li>
                      <a href="blog-single.html">No Sidebar</a>
                    </li>
                    <li>
                      <a href="blog-single-sidebar.html">Right Sidebar</a>
                    </li>
                    <li>
                      <a href="blog-single-sidebar-left.html">Left Sidebar</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Shop</a>
              <ul class="submenu">
                <li class="has-submenu">
                  <a href="#">Shop Layout</a>
                  <ul class="submenu">
                    <li>
                      <a href="shop-2col.html">2 Columns</a>
                    </li>
                    <li>
                      <a href="shop-3col.html">3 Columns</a>
                    </li>
                    <li>
                      <a href="shop-4col.html">4 Columns</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="shop-single.html">Single Product</a>
                </li>
                <li>
                  <a href="shop-cart.html">Cart</a>
                </li>
                <li>
                  <a href="shop-checkout.html">Checkout</a>
                </li>
              </ul>
            </li>
          </ul>
          <!-- End navigation menu        -->
        </div>
      </div>
    </header>
    <!-- End Navigation Bar-->