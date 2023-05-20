
<x-second-main>

    @section('style')
        
    <style>
      header{
        background: linear-gradient(rgba(0, 0, 0, 0.5), #0f0f0f7d),url('https://blnkcanvas.co.uk/gallery/867801679566014image.jpeg');
        height: 70vh;
        width:100%;
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
      }

      .color{
        color: #fff;
        padding: 200px 0;
        font-size: 4rem;
        font-weight: 600;
      }
    </style>

    @endsection

    @section('header')
        
    <header>
      
      <h1 class="text-aligns  color">Events</h1>

      <div id="sideNav">
        <nav>
            <ul>
                <li><a href="{{route('index')}}">HOME</a></li>
                <li><a href="{{route('news')}}">NEWS</a></li>
                <li><a href="{{route('about')}}">ABOUT</a></li>
                <li><a href="{{route('register')}}">REGISTER</a></li>
                <li><a href="{{route('event')}}">EVENTS</a></li>
                <li><a href="{{route('music')}}">MUSIC</a></li>
            </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="https://i.postimg.cc/j5RRCtb2/menu.png" id="menu">
    </div>
    </header>
    @endsection

    @section('section')

    
    <div class="scroll">
      <div class="container one">

        <div class="grid-cards">
          
          @foreach ($events as $event)
            
            <div class="card">
              <img
                src="{{ $event->image }}"
                alt="img-3"
                title="card image"
              />
              <div class="card-body">
                <h3 class="title-card">{{$event->title}}</h3>
                <p>
                  {{ $event->header }}
                </p>
              </div>
              <div class="card-footer">
                <a href="./register.html">Join</a>
              </div>
            </div>

            @endforeach

        </div>
      </div>
    </div>
    
    @endsection

    @section('scripts')
        
    <script src="../script/script.js"></script>
    <script src="../script/observer.js"></script>
    
    @endsection

</x-second-main>


