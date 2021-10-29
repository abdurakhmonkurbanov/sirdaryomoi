<div class="col-lg-4">
    <div class="sidebar">

      <h3 class="sidebar-title">Search</h3>
      <div class="sidebar-item search-form">
        <form action="">
          <input type="text">
          <button type="submit"><i class="icofont-search"></i></button>
        </form>
      </div><!-- End sidebar search formn-->

      <h3 class="sidebar-title">Bo'limlar</h3>
      <div class="sidebar-item categories">
        <ul>
          @foreach ($categories as $item)
            @if ($item->menu_type == 0)
                <li><a href="#">{{$item->title}} <span>{{$item->children->count() }}</span></a></li>

            @endif
              
          @endforeach
          
          
        </ul>

      </div><!-- End sidebar categories-->

      <h3 class="sidebar-title">Oxirgi postlar</h3>
      <div class="sidebar-item recent-posts">
        @foreach ($allnews as $item)
            <div class="post-item clearfix">
          <img src="/assets/images/{{$item->img}}" alt="">
          <h4><a href="{{route('index')}}/news/{{$item->id}}"> {{$item->title}} </a></h4>
          @if ($item->created_at != '')
            <time>{{$item->created_at->format('d.m.Y')}}</time>
          @endif
        </div>
        @endforeach

      </div><!-- End sidebar recent posts-->

      <h3 class="sidebar-title">Teglar</h3>
      <div class="sidebar-item tags">
        <ul>
          @foreach ($tags as $item)
            @if($item->tag !='')
              <li><a href="#"> {{  $item->tag }}</a></li>
              @endif
          @endforeach
          
        </ul>

      </div><!-- End sidebar tags-->

    </div><!-- End sidebar -->

  </div><!-- End blog sidebar -->