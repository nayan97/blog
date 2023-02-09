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
          <div class="col-sm-3">
            <div class="title txt-xs-center mt-0">
              <h3 class="upper">Our Vision<span class="red-dot"></span></h3>
              <hr>
            </div>
          </div>
          <div class="col-sm-8 col-sm-offset-1">
            <div class="row">
              <div class="col-md-6">
                <p class="alt-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam laborum vitae sapiente deleniti non! Ab sequi natus sapiente, nam ullam cum quo laborum, consequuntur aspernatur consequatur, inventore dignissimosse harumoram repellat.</p>
              </div>
              <div class="col-md-6">
                <blockquote class="p-0">
                  <p>Technology is just a tool. In terms of getting the kids working together and motivating them, the teacher is the most important.</p>
                  <footer>Bill Gates</footer>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
        <!-- end of row-->
      </div>
      <!-- end of container-->
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="title txt-xs-center mt-0">
              <h3 class="upper">Our Skills<span class="red-dot"></span></h3>
              <hr>
            </div>
          </div>
          <div class="col-sm-8 col-sm-offset-1">
            <div class="skill"><span class="skill-name">Design</span><span class="skill-perc" style="right: 10%;">90%</span>
              <div class="progress">
                <div role="progressbar" data-progress="90" class="progress-bar colored" style="width: 90%;"></div>
              </div>
            </div>
            <div class="skill"><span class="skill-name">Branding</span><span class="skill-perc" style="right: 20%;">80%</span>
              <div class="progress">
                <div role="progressbar" data-progress="80" class="progress-bar colored" style="width: 80%;"></div>
              </div>
            </div>
            <div class="skill"><span class="skill-name">Product Development</span><span class="skill-perc" style="right: 15%;">85%</span>
              <div class="progress">
                <div role="progressbar" data-progress="85" class="progress-bar colored" style="width: 85%;"></div>
              </div>
            </div>
            <div class="skill"><span class="skill-name">Web Development</span><span class="skill-perc" style="right: 5%;">95%</span>
              <div class="progress">
                <div role="progressbar" data-progress="95" class="progress-bar colored" style="width: 95%;"></div>
              </div>
            </div>
            <div class="skill"><span class="skill-name">Strategy</span><span class="skill-perc" style="right: 25%;">75%</span>
              <div class="progress">
                <div role="progressbar" data-progress="75" class="progress-bar colored" style="width: 75%;"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of row-->
      </div>
      <!-- end of container            -->
    </section>

    <section id="team">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="title txt-xs-center">
              <h3 class="upper">The Team<span class="red-dot"></span></h3>
              <hr>
            </div>
          </div>
          <div class="col-sm-8 col-sm-offset-1">
            <div data-options="{&quot;items&quot;: 2, &quot;autoplay&quot;: true, &quot;margin&quot;: 30, &quot;mdItems&quot;: 2, &quot;smItems&quot;: 1}" class="owl-carousel owl-theme owl-loaded owl-responsive-992">
              
              
              
            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1294px, 0px, 0px); transition: all 0.25s ease 0s; width: 2264.5px;"><div class="owl-item cloned" style="width: 293.5px; margin-right: 30px;"><div class="team-member mt-25">
                <div class="team-image">
                  <img src="frontend/images/team/1.jpg" alt="">
                </div>
                <div class="team-info">
                  <h3>Jesse Pinkman</h3><span>Architect</span>
                </div>
                <div class="team-social">
                  <ul>
                    <li><a href="#" target="blank"><i class="ti-facebook"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-twitter-alt"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-linkedin"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-instagram"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-dribbble"></i></a>
                    </li>
                  </ul>
                </div>
              </div></div><div class="owl-item cloned" style="width: 293.5px; margin-right: 30px;"><div class="team-member mt-25">
                <div class="team-image">
                  <img src="frontend/images/team/3.jpg" alt="">
                </div>
                <div class="team-info">
                  <h3>Elliot Anderson</h3><span>Engineer</span>
                </div>
                <div class="team-social">
                  <ul>
                    <li><a href="#" target="blank"><i class="ti-facebook"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-twitter-alt"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-linkedin"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-instagram"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-dribbble"></i></a>
                    </li>
                  </ul>
                </div>
              </div></div><div class="owl-item" style="width: 293.5px; margin-right: 30px;"><div class="team-member mt-25">
                <div class="team-image">
                  <img src="frontend/images/team/2.jpg" alt="">
                </div>
                <div class="team-info">
                  <h3>Arya Stark</h3><span>Founder and CEO</span>
                </div>
                <div class="team-social">
                  <ul>
                    <li><a href="#" target="blank"><i class="ti-facebook"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-twitter-alt"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-linkedin"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-instagram"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-dribbble"></i></a>
                    </li>
                  </ul>
                </div>
              </div></div><div class="owl-item" style="width: 293.5px; margin-right: 30px;"><div class="team-member mt-25">
                <div class="team-image">
                  <img src="frontend/images/team/1.jpg" alt="">
                </div>
                <div class="team-info">
                  <h3>Jesse Pinkman</h3><span>Architect</span>
                </div>
                <div class="team-social">
                  <ul>
                    <li><a href="#" target="blank"><i class="ti-facebook"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-twitter-alt"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-linkedin"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-instagram"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-dribbble"></i></a>
                    </li>
                  </ul>
                </div>
              </div></div><div class="owl-item active" style="width: 293.5px; margin-right: 30px;"><div class="team-member mt-25">
                <div class="team-image">
                  <img src="frontend/images/team/3.jpg" alt="">
                </div>
                <div class="team-info">
                  <h3>Elliot Anderson</h3><span>Engineer</span>
                </div>
                <div class="team-social">
                  <ul>
                    <li><a href="#" target="blank"><i class="ti-facebook"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-twitter-alt"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-linkedin"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-instagram"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-dribbble"></i></a>
                    </li>
                  </ul>
                </div>
              </div></div><div class="owl-item cloned active" style="width: 293.5px; margin-right: 30px;"><div class="team-member mt-25">
                <div class="team-image">
                  <img src="frontend/images/team/2.jpg" alt="">
                </div>
                <div class="team-info">
                  <h3>Arya Stark</h3><span>Founder and CEO</span>
                </div>
                <div class="team-social">
                  <ul>
                    <li><a href="#" target="blank"><i class="ti-facebook"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-twitter-alt"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-linkedin"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-instagram"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-dribbble"></i></a>
                    </li>
                  </ul>
                </div>
              </div></div><div class="owl-item cloned" style="width: 293.5px; margin-right: 30px;"><div class="team-member mt-25">
                <div class="team-image">
                  <img src="frontend/images/team/1.jpg" alt="">
                </div>
                <div class="team-info">
                  <h3>Jesse Pinkman</h3><span>Architect</span>
                </div>
                <div class="team-social">
                  <ul>
                    <li><a href="#" target="blank"><i class="ti-facebook"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-twitter-alt"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-linkedin"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-instagram"></i></a>
                    </li>
                    <li><a href="#" target="blank"><i class="ti-dribbble"></i></a>
                    </li>
                  </ul>
                </div>
              </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;">prev</div><div class="owl-next" style="display: none;">next</div></div><div class="owl-dots" style="display: none;"></div></div></div>
          </div>
        </div>
        <!-- end of row-->
      </div>
      <!-- end of container                    -->
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="title txt-xs-center mt-0">
              <h3 class="upper">Our Clients<span class="red-dot"></span></h3>
              <hr>
            </div>
          </div>
          <div class="col-sm-8 col-sm-offset-1">
            <div data-options="{&quot;items&quot;: 4, &quot;autoplay&quot;: true, &quot;margin&quot;: 100, &quot;smItems&quot;: 3, &quot;xsItems&quot;: 6}" class="owl-carousel owl-theme owl-loaded owl-responsive-992">
              
              
              
              
              
              
            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1434px, 0px, 0px); transition: all 0.25s ease 0s; width: 2868px;"><div class="owl-item cloned" style="width: 139px; margin-right: 100px;"><div class="client">
                <img src="frontend/images/clients/4.png" alt="">
              </div></div><div class="owl-item cloned" style="width: 139px; margin-right: 100px;"><div class="client">
                <img src="frontend/images/clients/5.png" alt="">
              </div></div><div class="owl-item cloned" style="width: 139px; margin-right: 100px;"><div class="client">
                <img src="frontend/images/clients/6.png" alt="">
              </div></div><div class="owl-item" style="width: 139px; margin-right: 100px;"><div class="client">
                <img src="frontend/images/clients/1.png" alt="">
              </div></div><div class="owl-item" style="width: 139px; margin-right: 100px;"><div class="client">
                <img src="frontend/images/clients/2.png" alt="">
              </div></div><div class="owl-item" style="width: 139px; margin-right: 100px;"><div class="client">
                <img src="frontend/images/clients/3.png" alt="">
              </div></div><div class="owl-item active" style="width: 139px; margin-right: 100px;"><div class="client">
                <img src="frontend/images/clients/4.png" alt="">
              </div></div><div class="owl-item active" style="width: 139px; margin-right: 100px;"><div class="client">
                <img src="frontend/images/clients/5.png" alt="">
              </div></div><div class="owl-item active" style="width: 139px; margin-right: 100px;"><div class="client">
                <img src="frontend/images/clients/6.png" alt="">
              </div></div><div class="owl-item cloned" style="width: 139px; margin-right: 100px;"><div class="client">
                <img src="frontend/images/clients/1.png" alt="">
              </div></div><div class="owl-item cloned" style="width: 139px; margin-right: 100px;"><div class="client">
                <img src="frontend/images/clients/2.png" alt="">
              </div></div><div class="owl-item cloned" style="width: 139px; margin-right: 100px;"><div class="client">
                <img src="frontend/images/clients/3.png" alt="">
              </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;">prev</div><div class="owl-next" style="display: none;">next</div></div><div class="owl-dots" style="display: none;"></div></div></div>
          </div>
        </div>
        <!-- end of row-->
      </div>
      <!-- end of container            -->
    </section>
  
  @include('frontend.sections.counter')