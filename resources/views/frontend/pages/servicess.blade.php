@extends('frontend.layouts.app')

@section('frontend-main')


<section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="{{ asset ('frontend/images/bg/11.jpg')}}" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="title center">
                <h1 class="upper">Contact Us<span class="red-dot"></span></h1>
                <h4>Let’s get in touch.</h4>
                <hr>
              </div>
            </div>
            <!-- end of container-->
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="title txt-sm-center txt-xs-center">
              <h4 class="upper">Design the web, the visual way.</h4>
              <h3>The Process<span class="red-dot"></span></h3>
            </div>
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-sm-3 col-xs-6">
                <div class="icon-box-simple"><i class="icon-briefcase mb-15"></i><span>Business</span>
                </div>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="icon-box-simple"><i class="icon-map mb-15"></i><span>Travelling</span>
                </div>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="icon-box-simple"><i class="icon-wallet mb-15"></i><span>Accounting</span>
                </div>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="icon-box-simple"><i class="icon-presentation mb-15"></i><span>Workshops</span>
                </div>
              </div>
            </div>
            <!-- end of row-->
          </div>
        </div>
        <!-- end of row-->
      </div>
      <!-- end of container-->
    </section>

    <section>
      <div class="container">
        <div class="title center">
          <h4 class="upper">We speak your language.</h4>
          <h2>Pixel Perfect<span class="red-dot"></span></h2>
          <hr>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="icon-box-basic"><i class="icon-layers"></i>
                <h4>Computing</h4>
                <p>Lorem ipsum dolor sit amet, ete elit consectetur adipisicing. Omnis quae, ipsam impedit eius, vero.</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="icon-box-basic"><i class="icon-scissors"></i>
                <h4>Design</h4>
                <p>Lorem ipsum dolor sit amet, ete elit consectetur adipisicing. Omnis quae, ipsam impedit eius, vero.</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="icon-box-basic"><i class="icon-mobile"></i>
                <h4>Development</h4>
                <p>Lorem ipsum dolor sit amet, ete elit consectetur adipisicing. Omnis quae, ipsam impedit eius, vero.</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="icon-box-basic"><i class="icon-trophy"></i>
                <h4>Printing</h4>
                <p>Lorem ipsum dolor sit amet, ete elit consectetur adipisicing. Omnis quae, ipsam impedit eius, vero.</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="icon-box-basic"><i class="icon-hotairballoon"></i>
                <h4>E-Commerce</h4>
                <p>Lorem ipsum dolor sit amet, ete elit consectetur adipisicing. Omnis quae, ipsam impedit eius, vero.</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="icon-box-basic"><i class="icon-lock"></i>
                <h4>Security</h4>
                <p>Lorem ipsum dolor sit amet, ete elit consectetur adipisicing. Omnis quae, ipsam impedit eius, vero.</p>
              </div>
            </div>
          </div>
          <!-- end of row-->
        </div>
        <!-- end of section content-->
      </div>
      <!-- end of container-->
    </section>

    @include('frontend.sections.expertise')
  
  @include('frontend.sections.counter')

 
  
 

@endsection