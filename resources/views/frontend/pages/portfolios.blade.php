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
    <section class="b-0">
      <div class="container">
        <div data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true, &quot;directionNav&quot;: true}" class="flexslider nav-inside">
          <ul class="slides">
            <li>
              <img src="frontend/images/portfolio/single-1.jpg" alt="">
            </li>
            <li>
              <img src="frontend/images/portfolio/single-2.jpg" alt="">
            </li>
            <li>
              <img src="frontend/images/portfolio/single-3.jpg" alt="">
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="p-0 b-0">
      <div class="boxes">
        <div class="container-fluid">
        <div class="row">
          @php 
            $step_no = 1;
          @endphp 
          @foreach ( json_decode($portfolio -> steps) as $item)
            <div data-bg-color="#eaeaea" class="col-md-4">
              <div class="number-box"><span>Step No.</span>
                <h2>0{{ $step_no }}<span class="red-dot"></span></h2>
                <h4>{{ $item -> title }}</h4>
                <p>{{ $item -> desc }}</p>
              </div>
            </div>
            @php $step_no++; @endphp 
          @endforeach
          

        </div>
          <!-- end of row-->
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="project-detail">
              <p><strong>Client:</strong>{{ $portfolio -> client}}</p>
              <p><strong>Date:</strong>{{ date(' F d,Y', strtotime( $portfolio -> psd)) }}</p>
              <p><strong>Link:</strong><a href="{{ $portfolio -> link}}<">{{ $portfolio -> title}}</a>
              </p>
              <p><strong>Type:</strong>{{ $portfolio -> type}}</p>
            </div>
          </div>
          <div class="col-sm-8">
          {!! htmlspecialchars_decode($portfolio -> desc) !!}
          </div>
        </div>
      </div>
    </section>
    <section class="controllers p-0">
  
  @include('frontend.sections.counter')

 
  
 

@endsection