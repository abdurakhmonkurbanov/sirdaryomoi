<section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container">
        <div class="row">
            <div class="col entries">
                <article class="entry entry-single">
                    @foreach ($page as $item)
                        <?php if($item->img) 
                            {?>
                                <div class="entry-img text-center">
                                    <img src="/assets/images/{{$item->img}}" alt="" class="img-fluid">
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="icofont-user"></i> 
                                            <a href="#">Admin</a></li>
                                            @if ($item->created_at != '')
                                            <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> 
                                                <a href="#"><time datetime="2020-01-01">{{$item->created_at->format('d.m.Y')}}</time>
                                                </a>
                                            </li>
                                            @endif
                                        
                                        <li class="d-flex align-items-center"><i class="icofont-comment"></i> 
                                            <a href="#">No comments</a>
                                        </li>
                                    </ul>
                                </div>
                      
                      <?php } ?>
                        <div class="entry-content">
                            
                            <h2 class="entry-title text-center"> {!!$item->title!!}    </h2>
                                {!!$item->text!!}
                        </div>
                    @endforeach
                </article>
                <?php if($item->desc) 
                            {?>
                @include('components.comments')
                                <?php 
                            }
                                ?>
            </div>
            @include('components.sidebar')
        </div>
    </div>
</section>