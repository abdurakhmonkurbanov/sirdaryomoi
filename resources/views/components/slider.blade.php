<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <?php $i=1; ?>
      @foreach ($news3ta as $item)
      <div class="carousel-item @if ($i==1)   active
      @endif">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"><img src="/assets/images/{{$item->img}}" width="35%"></h2>
          
          <p class="animate__animated animate__fadeInUp">{{ Str::of($item->desc)->limit(100,' ( ...)') }} </p>

          <a href="{{route('index')}}/news/{{$item->id}}" class="btn-get-started animate__animated animate__fadeInUp">Batafsil</a>
        </div>
      </div>
      <?php $i++; ?>
      @endforeach

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->