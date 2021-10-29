<main id="main">
	  <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
<div class="container">
	  <div class="row">
			<div class="col">
		  <article class="entry">
              <div class="entry-img">
                @foreach ($oelon as $item)
				  <h3><a href="/assets/images/{{$item->img}}" data-gall="portfolioGallery" class="venobox" title=""><img src="/assets/images/{{$item->img}}" width="90%" class="img-fluid"></a></h3>
              </div>

              <h2 class="entry-title">
                <a href=" {{route('index')}}/news/{{$item->id}}"> {!!$item->title!!} </a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Admin</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ $item->created_at }}</time></a></li>
                  
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {{$item->desc}} 
                </p>
                <div class="read-more">
                  <a href=" {{route('index')}}/news/{{$item->id}}">Batafsil</a>
                </div>
                @endforeach
              </div>

            </article><!-- End blog Oxirgi e'lon -->
            <article class="entry">

              <div class="entry-img">
                
                @foreach ($otadbir as $item)
                    
                
				  <h3><a href="/assets/images/{{$item->img}}" data-gall="portfolioGallery" class="venobox" title=""><img src="/assets/images/{{$item->img}}" width="90%" class="img-fluid"></a></h3>
              </div>

              <h2 class="entry-title">
                <a href=" {{route('index')}}/news/{{$item->id}}">{!!$item->title!!} </a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Admin</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ $item->created_at }}</time></a></li>
                  
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {{$item->desc}} 
                </p>
                <div class="read-more">
                  <a href=" {{route('index')}}/news/{{$item->id}}">Batafsil</a>
                </div>
                @endforeach
              </div>

            </article><!-- End blog entry -->
            <article class="entry">

              <div class="entry-img">
                
                @foreach ($okonf as $item)
                    
                
				  <h3><a href="/assets/images/{{$item->img}}" data-gall="portfolioGallery" class="venobox" title=""><img src="/assets/images/{{$item->img}}" width="90%" class="img-fluid"></a></h3>
              </div>

              <h2 class="entry-title">
                <a href=" {{route('index')}}/news/{{$item->id}}">{!!$item->title!!} </a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Admin</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ $item->created_at }}</time></a></li>
                  
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {!!$item->desc!!} 
                </p>
                <div class="read-more">
                  <a href=" {{route('index')}}/news/{{$item->id}}">Batafsil</a>
                </div>
                @endforeach
              </div>

            </article><!-- End blog entry -->
	  
		  	</div>
		  @include('components.sidebar')
	</div>  
	  </div>
	  </section>
    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">
        <div class="row">
          <div class="col text-center title">Bizning kafedralar</div>
        </div>
      </div>
      
      <div class="container">

        <div class="row">
          @foreach ($kafedra as $item)
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="{!!$item->icon!!}"></i></div>
              <h4 class="title"><a href="/page/{{$item->id}}"> {!!$item->title!!} </a></h4>
              <p class="description"> {!!$item->description!!} </p>
            </div>
          </div>
          @endforeach
          
        </div>

      </div>
    </section><!-- End Services Section -->

    
 <!-- ======= Tetstimonials Section ======= -->
    <section class="testimonials" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Bo'limlar</h2>
        </div>

        <div class="owl-carousel testimonials-carousel">
          @foreach ($bulim as $item)
          <div class="testimonial-item">
            <img src="/assets/img/{{$item->icon}}" class="testimonial-img" alt="">
            <h3>{!! $item->title !!}</h3>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              {!! $item->description !!}<br>
             <a href="/page/{{$item->id}}"> Batafsil <i class="icofont-arrow-right"></i></a> 
            </p>
          </div>
        @endforeach
        </div>

      </div>
    </section><!-- End Ttstimonials Section -->
     

  </main><!-- End #main -->