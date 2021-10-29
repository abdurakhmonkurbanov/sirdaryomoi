<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
  <div class="container">

    <div class="logo float-left">
      <a href="/" class="text-white"><img  src="/assets/img/logo.png"> </a>
    </div>

    <nav class="nav-menu  d-block">
        <ul>
          @foreach($categories as $item)
          @if($item->children->count() > 0)
              <li class="drop-down"> 
                <a href="#">{{$item->title}}</a>
                  <ul>
                    @foreach($item->children as $submenu)
                        @if ($submenu->children->count() > 0)
                        <li class="drop-down"><a href="">{{$submenu->title}}</a>
                            <ul>
                              @foreach($submenu->children as $subsubmenu)
                              <li><a href="/page/{{$subsubmenu->id}}">{!!$subsubmenu->title!!}</a></li>
                              @endforeach
                            </ul>
                        @else
                              <li><a href="/page/{{$submenu->id}}">{{$submenu->title}}</a></li>
                        @endif
                    @endforeach
                  </ul>
                </li>
                @else
                <li><a href="">{{$item->title}}</a></li>
            @endif
            @endforeach
            <li class="drop-down"><a href="">Interaktiv xizmatlar</a>
              <ul>
                  <li><a href="">Search</a></li>
                  <li><a href="">Login</a></li>
                  <li><a href="">Registratsiya</a></li>

              </ul>
            </li> 
        </ul>
        
      </nav><!-- .nav-menu -->
    </nav><!-- .nav-menu -->

  </div>
</header><!-- End Header -->
