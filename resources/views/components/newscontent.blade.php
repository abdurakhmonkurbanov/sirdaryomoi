<main id="main">
    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
      <div class="container">

        <div class="row">
           
          @foreach ($page as $item)
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="/assets/images/{{$item->img}}" width="100%">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href=" {{route('index')}}/news/{{$item->id}}"> {!!$item->title!!}</a></h5>
                <p class="card-text"> {!!$item->desc!!} </p>

                <div class="read-more"><a href=" {{route('index')}}/news/{{$item->id}}"><i class="icofont-arrow-right"></i> Batafsil </a>
                </div>
                
              </div>
              
            </div>
          </div>
          @endforeach
      </div>
		 
		</div>

	  </section><!-- End Service Details Section -->
<section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
		  <div class="container">

        <div class="row">

          <div class="col entries">
  <!-- Blog pagination  -->
    	<div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="disabled"><i class="icofont-rounded-left"></i></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
              </ul>
            </div>       
		</div>
			  </div>
		  </div>
		  </section>
 
  </main><!-- End #main -->