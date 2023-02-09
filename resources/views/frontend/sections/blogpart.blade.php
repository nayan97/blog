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
            @php
                $posts = App\Models\Post::latest() -> take(2) -> get();
            @endphp

            @foreach ($posts as $post)
              <div class="blog-post">
                <div class="post-body">
                  <h4 class="serif"><a href="#">{{ $post -> title}}</a></h4>
                  <hr>
                  <p style="font-size: 14px;" >{!! Str::of(htmlspecialchars_decode($post -> content)) -> words(20) !!}</p>
                  <div class="post-info upper"><a href="{{ route('blog.single', $post -> slug)}}">Read More</a><span class="pull-right black-text">{{ date('F d, Y ', strtotime($post -> created_at))}}</span>
                </div>
              </div>
              
            @endforeach
              
                <!-- end of blog post-->
              </div>
              </div>
            </div>
          </div>
          <!-- end of row-->
          <div class="clearfix"></div>
          <div class="mt-25">
            <p class="text-center"><a href="{{ route('blog.page')}}" class="btn btn-color-out">View Full Blog          </a>
            </p>
          </div>
        </div>
        <!-- end of container-->
      </div>
    </section>