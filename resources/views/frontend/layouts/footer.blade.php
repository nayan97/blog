@php
  $theme_data = App\Models\Theme::find(1);
  $social = json_decode($theme_data -> social, false);
@endphp  
   
   <!-- Footer-->
    <footer id="footer-widgets">
      <div class="container">
        <div class="go-top">
          <a href="#top">
            <i class="ti-arrow-up"></i>
          </a>
        </div>
        <div class="row">
          <div class="col-md-6 ov-h">
            <div class="row">
              <div class="col-sm-4">
                <div class="widget">
                  <h6 class="upper">About Comet</h6>
                  <p>
                    <span>Fourth Floor</span>
                    <span>New York, NY 10011</span>
                    <span>hello@comet.com</span>
                  </p><a href="#" class="btn btn-color-out btn-sm">Hire Us!</a>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget">
                  <h6 class="upper">Culture</h6>
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">Team</a>
                    </li>
                    <li>
                      <a href="#">Process</a>
                    </li>
                    <li>
                      <a href="#">Story</a>
                    </li>
                    <li>
                      <a href="#">Careers</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget">
                  <h6 class="upper">Case Studies</h6>
                  <ul class="list-unstyled">
                    <li>
                      <a href="portfolio-single-1.html">Neleman Cava</a>
                    </li>
                    <li>
                      <a href="portfolio-single-2.html">Sweet Lane</a>
                    </li>
                    <li>
                      <a href="portfolio-single-3.html">Jeff Burger</a>
                    </li>
                    <li>
                      <a href="portfolio-single-1.html">Juice Meds</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-md-offset-2">
            <div class="row">
              <div class="col-md-12">
                <div class="widget">
                  <h6 class="upper">Stay in touch</h6>
                  <p>Sign Up to get the latest updates.</p>
                  <div class="footer-newsletter">
                    <form data-mailchimp="true" class="inline-form">
                      <div class="input-group">
                        <input type="email" name="email" placeholder="Your Email" class="form-control"><span class="input-group-btn"><button type="submit" data-loading-text="Loading..." class="btn btn-color">Subscribe</button></span>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of row-->
      </div>
      <!-- end of container-->
    </footer>
    <footer id="footer">
      <div class="container">
        <div class="footer-wrap">
          <div class="row">
            <div class="col-md-4">
              <div class="copy-text">
                <p><i class="icon-heart red mr-15"></i>© {{ $theme_data -> copyright }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <ul class="list-inline">
                <li>
                  <a href="{{ route('about.page')}}">About</a>
                </li>
                <li>
                  <a href="{{ route('servicess.page')}}">Services</a>
                </li>
                <li>
                  <a href="{{ route('blog.page')}}">Blog</a>
                </li>
                <li>
                  <a href="{{ route('contact.page')}}">Contact</a>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <div class="footer-social">
                <ul>
                 
                  @if (!empty ($social -> fb))
                  <li>
                      <a target="_blank" href="{{ $social -> fb }}"><i class="ti-facebook"></i></a>
                  </li>
                      @endif
                
                      @if (!empty ($social -> tw))
                  <li>
                    <a target="_blank" href="{{$social -> tw}}"><i class="ti-twitter-alt"></i></a>
                  </li>
                      
                      @endif
                      @if (!empty ($social -> din))
                      <li>
                         <a target="_blank" href="{{$social -> din}}"><i class="ti-linkedin"></i></a>
                        </li>
                      
                      @endif
                      @if (!empty ($social -> ins))
                      <li>
                        <a target="_blank" href="{{$social -> ins}}"><i class="ti-instagram"></i></a>
                     </li>
                      
                      @endif

                      @if (!empty ($social -> wapp))
                      <li>
                        <a target="_blank" href="{{$social -> wapp}}"><i class="ti-whatsapp"></i></a>
                      </li>
                      
                      @endif
      
                </ul>
              </div>
            </div>
          </div>
          <!-- end of row-->
        </div>
      </div>
      <!-- end of container-->
    </footer>
    <!-- end of footer-->