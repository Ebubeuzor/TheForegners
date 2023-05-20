
<x-second-main>

    @section('header')
        <div style="text-align:center; margin-top: -50px;">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>
        <div id="sideNav">
            <nav>
                <ul>
                    <li><a href="{{route('index')}}">HOME</a></li>
                    <li><a href="{{route('about')}}">ABOUT</a></li>
                    <li><a href="{{route('register')}}">REGISTER</a></li>
                    <li><a href="{{route('event')}}">EVENTS</a></li>
                    <li><a href="{{route('music')}}">MUSIC</a></li>

                </ul>
            </nav>
        </div>

    @endsection

    @section('section')
        
            
    <div id="menuBtn">
    <img src="https://i.postimg.cc/j5RRCtb2/menu.png" id="menu">
    </div>
    <div class="wrapper">


    <article class="post">
    
        <div>
            <div class="absolute-bg" style="background-image: url('{{$randomRow->image}}');"></div>
            </div>
            <div class="post__container">
            <span class="post__category"> News Update</span>
            
            <div class="post__content">
                <header>
                <h1 class="post__header"> {{$randomRow->title}} </h1>
                </header>
            
                <p class="post__text"> {{$randomRow->content}} </p>
            </div>
            <time class="post__time"> {{$randomRow->created_at->format('F j, Y')}} </time>

            <div class="post__link">
                <a href="#">Learn More&#x2192;</a>
            </div>
        </div>
    </article>

    <section class="post-feed section">
        <div class="section_inner">
            <div class="section__main">
                <div class="teaser-list_header">
                    <ul class="tab-scroll">
                        <li class="active tab-scroll__item">
                        ALL
                        </li>
                        <li class="active tab-scroll__item">
                        Event
                        </li>
                        <li class="active tab-scroll__item">
                        Music
                        </li>
                        <li class="active tab-scroll__item">
                        Fashion
                        </li>
                    </ul>
                </div>

                <div class="content-wrapper">
                
                    @foreach ($cnews as $news)
                    
                    <div class="news-card">
                        <a href="#" class="news-card__card-link"></a>
                        <img src="{{ $news->image }}" alt="" class="news-card__image">
                        <div class="news-card__text-wrapper">
                        <h2 class="news-card__title">{{$news->title}}</h2>
                        <div class="news-card__post-date">{{$news->created_at->format('F j, Y')}}</div>
                        <div class="news-card__details-wrapper">
                            <p class="news-card__excerpt">{{$news->header}}</p>
                            <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                        </div>
                    </div>

                    @endforeach
                
                </div>
            </div>
        </div>
    </section>
    </div>

    
    @endsection


</x-second-main>