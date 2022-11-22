<!DOCTYPE html>
<html lang="en">

  
<!-- Mirrored from themes.hody.co/html/comet/index-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jan 2017 09:39:31 GMT -->
<head>
    <title>Comet | Creative Multi-Purpose HTML Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ url ('frontend/css/bundle.css')}}">
    <link rel="stylesheet" href="{{ url ('frontend/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Halant:300,400" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-46276885-13', 'auto');
      ga('send', 'pageview');
    </script>
  </head>

  <body>
    <!-- Preloader-->
    <div id="loader">
      <div class="centrize">
        <div class="v-center">
          <div id="mask">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Preloader-->

      @include('frontend.layouts.header')

    <!-- Home section-->
    <section id="home">
      <!-- Video background-->
      <div id="video-wrapper">
        <video autoplay="true" loop="true" preload="auto">
          <source src="frontend/video/video.mp4" type="video/mp4">
            <source src="frontend/video/video.webm" type="video/webm">
        </video>
      </div>
      <!-- end of video background-->
      <!-- Home slider-->
      <div id="home-slider" class="flexslider">
        <ul class="slides">
          <li>
            <div class="slide-wrap">
              <div class="slide-content bold-text">
                <div class="container">
                  <h6>We are fun and young.</h6>
                  <h1 class="upper smaller">We love design<span class="red-dot"></span></h1>
                  <p><a href="#" class="btn btn-light-out">Read More</a><a href="#" class="btn btn-color btn-full">Services</a>
                  </p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="slide-wrap">
              <div class="slide-content bold-text">
                <div class="container">
                  <h6>Video - Animations - Media</h6>
                  <h1 class="upper smaller">We make cool things<span class="red-dot"></span></h1>
                  <p><a href="#" class="btn btn-color">Explore</a><a href="#" class="btn btn-light-out">Join us</a>
                  </p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <!-- end of home slider-->
    </section>
    <!-- end of home section-->
    <section id="about">
      <div class="container">
        <div class="title center">
          <h4 class="upper">We are driven by creative.</h4>
          <h2>Who We Are<span class="red-dot"></span></h2>
          <hr>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <p class="lead-text serif text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt sed ad possimus magnam maiores. Ipsam quas velit blanditiis debitis consequuntur mollitia assumenda nam obcaecati illo! Dolores deleniti animi.</p>
            </div>
          </div>
          <!-- end of row-->
        </div>
        <!-- end of section content-->
      </div>
      <!-- end of container-->
    </section>
    <section class="p-0 b-0">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-sm-4 img-side img-left mb-0">
            <div class="img-holder">
              <img src="frontend/images/bg/33.jpg" alt="" class="bg-img">
              <div class="centrize">
                <div class="v-center">
                  <div class="title txt-xs-center">
                    <h4 class="upper">This is what we love to do.</h4>
                    <h3>Expertise<span class="red-dot"></span></h3>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end of side background image-->
          <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
            <div class="services">
              <div class="row">
                <div class="col-sm-6 border-bottom border-right">
                  <div class="service"><i class="icon-focus"></i><span class="back-icon"><i class="icon-focus"></i></span>
                    <h4>Branding</h4>
                    <hr>
                    <p class="alt-paragraph">Facilis doloribus illum quis, expedita mollitia voluptate non iure, perspiciatis repellat eveniet volup.</p>
                  </div>
                  <!-- end of service-->
                </div>
                <div class="col-sm-6 border-bottom">
                  <div class="service"><i class="icon-layers"></i><span class="back-icon"><i class="icon-layers"></i></span>
                    <h4>Interactive</h4>
                    <hr>
                    <p class="alt-paragraph">Commodi totam esse quis alias, nihil voluptas repellat magni, id fuga perspiciatis, ut quia beatae, accus.</p>
                  </div>
                  <!-- end of service-->
                </div>
                <div class="col-sm-6 border-bottom border-right">
                  <div class="service"><i class="icon-mobile"></i><span class="back-icon"><i class="icon-mobile"></i></span>
                    <h4>Production</h4>
                    <hr>
                    <p class="alt-paragraph">Doloribus qui asperiores nisi placeat volup eum, nemo est, praesentium fuga alias sit quis atque accus.</p>
                  </div>
                  <!-- end of service-->
                </div>
                <div class="col-sm-6 border-bottom">
                  <div class="service"><i class="icon-globe"></i><span class="back-icon"><i class="icon-globe"></i></span>
                    <h4>Editing</h4>
                    <hr>
                    <p class="alt-paragraph">Aliquid repellat facilis quis. Sequi excepturi quis dolorem eligendi deleniti fuga rerum itaque.</p>
                  </div>
                  <!-- end of service-->
                </div>
              </div>
            </div>
            <!-- end of row-->
          </div>
        </div>
        <!-- end of row -->
      </div>
    </section>
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-sm-4 img-side img-right">
            <div class="img-holder">
              <img src="frontend/images/bg/10.jpg" alt="" class="bg-img">
            </div>
          </div>
          <!-- end of side background image-->
        </div>
        <!-- end of row-->
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-8">
            <div class="title">
              <h4 class="upper">Not just code.</h4>
              <h3>The Vision<span class="red-dot"></span></h3>
              <hr>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="text-box">
                  <h4 class="upper small-heading">Strategy</h4>
                  <p>Natus totam adipisci illum aut nihil consequuntur ut, ducimus alias iusto facili.</p>
                </div>
                <!-- end of text box-->
              </div>
              <div class="col-sm-6">
                <div class="text-box">
                  <h4 class="upper small-heading">Design</h4>
                  <p>Nisi, ut commodi dolor, quae doloremque earum alias accusantium sint.</p>
                </div>
                <!-- end of text box-->
              </div>
              <div class="col-sm-6">
                <div class="text-box">
                  <h4 class="upper small-heading">Skills</h4>
                  <p>Nesciunt est eaque, expedita cum minima reprehenderit? Harum vero dolorum.</p>
                </div>
                <!-- end of text box-->
              </div>
              <div class="col-sm-6">
                <div class="text-box">
                  <h4 class="upper small-heading">Power</h4>
                  <p>Fuga ipsum, repellendus? Architecto commodi magni non nihil et iusto.</p>
                </div>
                <!-- end of text box-->
              </div>
            </div>
            <!-- end of row              -->
          </div>
        </div>
        <!-- end of row-->
      </div>
      <!-- end of container-->
    </section>
    <section id="portfolio" class="pb-0">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="title m-0 txt-xs-center txt-sm-center">
              <h2 class="upper">Selected Works<span class="red-dot"></span></h2>
              <hr>
            </div>
          </div>
          <div class="col-md-6">
            <ul id="filters" class="no-fix mt-25">
              <li data-filter="*" class="active">All</li>
              <li data-filter=".branding">Branding</li>
              <li data-filter=".graphic">Graphic</li>
              <li data-filter=".printing">Printing</li>
              <li data-filter=".video">Video</li>
            </ul>
            <!-- end of portfolio filters-->
          </div>
        </div>
        <!-- end of row-->
      </div>
      <div class="section-content pb-0">
        <div id="works" class="four-col wide mt-50">
          <div class="work-item branding video">
            <div class="work-detail">
              <a href="portfolio-single-1.html">
                <img src="frontend/images/portfolio/1.jpg" alt="">
                <div class="work-info">
                  <div class="centrize">
                    <div class="v-center">
                      <h3>Neleman Cava</h3>
                      <p>Branding, Video</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="work-item graphic printing">
            <div class="work-detail">
              <a href="portfolio-single-1.html">
                <img src="frontend/images/portfolio/7.jpg" alt="">
                <div class="work-info">
                  <div class="centrize">
                    <div class="v-center">
                      <h3>Sweet Lane</h3>
                      <p>Graphic, Printing</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="work-item printing branding">
            <div class="work-detail">
              <a href="portfolio-single-1.html">
                <img src="frontend/images/portfolio/6.jpg" alt="">
                <div class="work-info">
                  <div class="centrize">
                    <div class="v-center">
                      <h3>Jeff Burger</h3>
                      <p>Printing, Branding</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="work-item video graphic">
            <div class="work-detail">
              <a href="portfolio-single-1.html">
                <img src="frontend/images/portfolio/9.jpg" alt="">
                <div class="work-info">
                  <div class="centrize">
                    <div class="v-center">
                      <h3>Juice Meds</h3>
                      <p>Video, Graphic</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="work-item branding graphic">
            <div class="work-detail">
              <a href="portfolio-single-1.html">
                <img src="frontend/images/portfolio/11.jpg" alt="">
                <div class="work-info">
                  <div class="centrize">
                    <div class="v-center">
                      <h3>Prisma</h3>
                      <p>Graphic, Branding</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="work-item printing graphic">
            <div class="work-detail">
              <a href="portfolio-single-1.html">
                <img src="frontend/images/portfolio/10.jpg" alt="">
                <div class="work-info">
                  <div class="centrize">
                    <div class="v-center">
                      <h3>Delirio Tropical</h3>
                      <p>Printing, Graphic</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="work-item printing branding">
            <div class="work-detail">
              <a href="portfolio-single-1.html">
                <img src="frontend/images/portfolio/8.jpg" alt="">
                <div class="work-info">
                  <div class="centrize">
                    <div class="v-center">
                      <h3>Amendoas</h3>
                      <p>Printing, Branding</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="work-item graphic video">
            <div class="work-detail">
              <a href="portfolio-single-1.html">
                <img src="frontend/images/portfolio/3.jpg" alt="">
                <div class="work-info">
                  <div class="centrize">
                    <div class="v-center">
                      <h3>Hnina</h3>
                      <p>Graphic, Video</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- end of portfolio grid-->
      </div>
    </section>
    <section>
      <div class="container">
        <div class="title center">
          <h4 class="upper">Some of the best.</h4>
          <h3>Our Clients<span class="red-dot"></span></h3>
          <hr>
        </div>
        <div class="section-content">
          <div class="boxes clients">
            <div class="row">
              <div class="col-sm-4 col-xs-6 border-right border-bottom">
                <img src="frontend/images/clients/1.png" alt="" data-animated="true" class="client-image">
              </div>
              <div class="col-sm-4 col-xs-6 border-right border-bottom">
                <img src="frontend/images/clients/2.png" alt="" data-animated="true" data-delay="500" class="client-image">
              </div>
              <div class="col-sm-4 col-xs-6 border-bottom">
                <img src="frontend/images/clients/3.png" alt="" data-animated="true" data-delay="1000" class="client-image">
              </div>
              <div class="col-sm-4 col-xs-6 border-right">
                <img src="frontend/images/clients/4.png" alt="" data-animated="true" class="client-image">
              </div>
              <div class="col-sm-4 col-xs-6 border-right">
                <img src="frontend/images/clients/5.png" alt="" data-animated="true" data-delay="500" class="client-image">
              </div>
              <div class="col-sm-4 col-xs-6">
                <img src="frontend/images/clients/6.png" alt="" data-animated="true" data-delay="1000" class="client-image">
              </div>
            </div>
            <!-- end of row-->
          </div>
        </div>
        <!-- end of section content-->
      </div>
    </section>
    <section class="parallax">
      <div data-parallax="scroll" data-image-src="frontend/images/bg/7.jpg" class="parallax-bg"></div>
      <div class="parallax-overlay pb-50 pt-50">
        <div class="container">
          <div class="title center">
            <h3>What They Say<span class="red-dot"></span></h3>
            <hr>
          </div>
          <div class="section-content">
            <div id="testimonials-slider" data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true}" class="flexslider nav-outside">
              <ul class="slides">
                <li>
                  <blockquote>
                    <p>"Blanditiis impedit omnis excepturi rem dolores! Ab consequuntur reiciendis eaque atque."</p>
                    <footer>Jon Snow - Google Inc.</footer>
                  </blockquote>
                </li>
                <li>
                  <blockquote>
                    <p>"Dolorem natus, sint. Enim molestias expedita laboriosam perferendis possimus facere nostrum laudantium vero."</p>
                    <footer>Daenerys Targarien - Apple Inc.</footer>
                  </blockquote>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end of container-->
      </div>
    </section>
    <section>
      <div class="container">
        <div class="title center">
          <h4 class="upper">We have a few tips for you.</h4>
          <h2>The Blog<span class="red-dot"></span></h2>
          <hr>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="blog-post">
                <div class="post-body">
                  <h3 class="serif"><a href="#">Checklists for Startups</a></h3>
                  <hr>
                  <p class="serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab corporis eos quod libero doloremque odio perspiciatis ratione cumque ex laboriosam, laborum accusantium quis quidem excepturi, adipisci neque, aliquam ea! [...]</p>
                  <div class="post-info upper"><a href="#">Read More</a><span class="pull-right black-text">November 16, 2015</span>
                  </div>
                </div>
                <!-- end of blog post-->
              </div>
              <div class="blog-post">
                <div class="post-body">
                  <h3 class="serif"><a href="#">Never Tell People What You Do</a></h3>
                  <hr>
                  <p class="serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab corporis eos quod libero doloremque odio perspiciatis ratione cumque ex laboriosam, laborum accusantium quis quidem excepturi, adipisci neque, aliquam ea! [...]</p>
                  <div class="post-info upper"><a href="#">Read More</a><span class="pull-right black-text">November 12, 2015</span>
                  </div>
                </div>
                <!-- end of blog post-->
              </div>
            </div>
          </div>
          <!-- end of row-->
          <div class="clearfix"></div>
          <div class="mt-25">
            <p class="text-center"><a href="#" class="btn btn-color-out">View Full Blog          </a>
            </p>
          </div>
        </div>
        <!-- end of container-->
      </div>
    </section>
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
                <p><i class="icon-heart red mr-15"></i>© 2015 Comet Agency.</p>
              </div>
            </div>
            <div class="col-md-4">
              <ul class="list-inline">
                <li>
                  <a href="#">About</a>
                </li>
                <li>
                  <a href="#">Services</a>
                </li>
                <li>
                  <a href="#">Blog</a>
                </li>
                <li>
                  <a href="#">Contact</a>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <div class="footer-social">
                <ul>
                  <li>
                    <a target="_blank" href="#"><i class="ti-facebook"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-twitter-alt"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-linkedin"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-instagram"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-dribbble"></i></a>
                  </li>
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
    <script type="text/javascript" src="{{ url ('frontend/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{ url ('frontend/js/bundle.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript" src="{{ url ('frontend/js/main.js')}}"></script>
  </body>


<!-- Mirrored from themes.hody.co/html/comet/index-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jan 2017 09:39:33 GMT -->
</html>