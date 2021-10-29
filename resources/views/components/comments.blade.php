<article class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <form action="/comments" method="post" role="form" class="email-form">
        @csrf
    <div class="form-row">
        <div class="col-md-6 form-group">
        <input type="hidden" name="page_id" value="{{$item->id}}">
        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"/>
        </div>
        <div class="col-md-6 form-group">
        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
        </div>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
    </div>
    
    <div class="text-center"><button type="submit" class="btn btn-outline-primary">Xabar qoldirish</button></div>
    </form>

</article>


@if (count($comments)>0)

    <h4 class="alert-primary p-2 rounded-pill text-center">Izohlar</h4>
    @foreach ($comments as $item)

    <div class="card text-dark bg-light mb-3">
        <div class="card-header"> <b>Name:</b>  {{$item->name}} <br> <b>Email:</b> {{$item->email}}</div>
        <div class="card-body">
          <p class="card-text">{{$item->message}}</p>
        </div>     
    </div>                
    @endforeach

@endif