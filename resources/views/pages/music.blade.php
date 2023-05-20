
<x-second-main>

    @section('style')
        
    <style>
        header{
          background: linear-gradient(rgba(0, 0, 0, 0.5), #0f0f0f7d),url('{{$randomRow->image}}');
          height: 70vh;
          width:100%;
          background-size: cover;
          background-position: center;
        }
  
        .showcase {
          width: 80%;
          margin: 100px auto;
        }
  
        .showcase h1{
          text-align: center;
        }
  
      
  
        .text-aligns{
          text-align: center;
          padding: 200px 0;
          font-size: 4rem;
          font-weight: 600;
          color: #fff;
        }

        .sub_p{
          position: absolute;
          top: 0;
          color: #fff;
          font-size: 14px;
          padding: 20px;
        }


        .pagination {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-top: 20px;
        justify-content: center;
        flex-wrap: wrap;
        }

        .btn {
        border: 1px solid #087f5b;
        height: 48px;
        width: 48px;
        border-radius: 50%;
        background: none;
        cursor: pointer;
        }

        .btn-icon {
        width: 24px;
        height: 24px;
        stroke: #087f5b;
        }

        .btn:hover {
        background-color: #087f5b;
        }

        .btn:hover .btn-icon {
        stroke: #fff;
        }

        .page-link:link,
        .page-link:visited {
        text-decoration: none;
        color: #343a40;
        font-size: 18px;
        height: 36px;
        width: 36px;
        border-radius: 50%;

        display: flex;
        align-items: center;
        justify-content: center;
        }

        .page-link:hover,
        .page-link:active,
        .page-link.page-link--current {
        background-color: #087f5b;
        color: #fff;
        }

        .dots {
        color: #868e96;
        }

        form {
        display: flex;
        align-items: center;
        }

        input[type="text"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: none;
        border-radius: 4px;
        }

        button[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        margin: 8px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        button[type="submit"]:hover {
        background-color: #45a049;
        }

    </style>
    @endsection

    @section('header')
        
      <header>
        <h1 class="text-aligns  color">{{$randomRow->artiste}}

        </h1>
        <h1 class="sub_p"> Artists of the Week</h1>
  
  
        <div id="sideNav">
          <nav>
              <ul>
                <li><a href="{{route('index')}}">HOME</a></li>
                <li><a href="{{route('news')}}">NEWS</a></li>
                <li><a href="{{route('about')}}">ABOUT</a></li>
                <li><a href="{{route('register')}}">REGISTER</a></li>
                <li><a href="{{route('event')}}">EVENTS</a></li>
              </ul>
          </nav>
        </div>
        <div id="menuBtn">
            <img src="https://i.postimg.cc/j5RRCtb2/menu.png" id="menu">
        </div>
      </header>

    @endsection

    @section('section')
        
    <section class="post-feed section">
        <div class="section_inner">
          <div class="section__main">
            <form method="get" action="{{ route('music.search') }}">
                @csrf
                <input type="text" name="artiste" value="{{ request()->input('artiste') }}" placeholder="Search...">
                <button type="submit">Search</button>
              </form>

                @if (isset($searchmusics))

                <div class="content-wrapper">
        
                  @forelse ($searchmusics as $music)
                    
                  <div class="news-card">
                    <a href="#" class="news-card__card-link"></a>
                    <img src="{{ $music->image }}" alt="" class="news-card__image">
                    <div class="news-card__text-wrapper">
                      <h2 class="news-card__title">{{$music->title}}</h2>
                      <div class="news-card__post-date">{{$music->created_at->format('F j, Y')}}</div>
                      <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt"> {{$music->content}} &hellip;</p>
                        <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                      </div>
                    </div>
                  </div>
                
                  @empty
                  <p>No artiste found</p>
                  @endforelse
                </div>              
                  
                @endif
    
            <div class="content-wrapper">
      
              @foreach ($musics as $music)
                
              <div class="news-card">
                <a href="#" class="news-card__card-link"></a>
                <img src="{{ $music->image }}" alt="" class="news-card__image">
                <div class="news-card__text-wrapper">
                  <h2 class="news-card__title">{{$music->title}}</h2>
                  <div class="news-card__post-date">{{$music->created_at->format('F j, Y')}}</div>
                  <div class="news-card__details-wrapper">
                    <p class="news-card__excerpt"> {{$music->content}} &hellip;</p>
                    <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                  </div>
                </div>
              </div>
            
              @endforeach

            </div>
          </div>
        </div>
        <div class="pagination">
            <button class="btn">
              <svg
                   xmlns="http://www.w3.org/2000/svg"
                   class="btn-icon"
                   fill="none"
                   viewBox="0 0 24 24"
                   stroke="currentColor"
                   stroke-width="2"
                   >
                <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 19l-7-7 7-7"
                      />
              </svg>
            </button>
            <a href="#" class="page-link">1</a>
            <a href="#" class="page-link">2</a>
            <a href="#" class="page-link page-link--current">3</a>
            <a href="#" class="page-link">4</a>
            <a href="#" class="page-link">5</a>
            <a href="#" class="page-link">6</a>
            <span class="dots">...</span>
            <a href="#" class="page-link">23</a>
            <button class="btn">
              <svg
                   xmlns="http://www.w3.org/2000/svg"
                   class="btn-icon"
                   fill="none"
                   viewBox="0 0 24 24"
                   stroke="currentColor"
                   stroke-width="2"
                   >
                <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M9 5l7 7-7 7"
                      />
              </svg>
            </button>
          </div>
    </section>
    @endsection


    @section('script')
    <script src="../script/observer.js"></script>
    @endsection


</x-second-main>