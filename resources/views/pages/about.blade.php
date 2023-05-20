
<x-second-main>

    @section('style')
        
    <style>
      header{
        background: linear-gradient(rgba(0, 0, 0, 0.5), #0f0f0f7d),url('../assets/djkhaklid.jpeg');
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
        padding: 200px 0;
        font-size: 4rem;
        font-weight: 600;
        color: #fff;
      }
    </style>
    @endsection

    @section('header')
        
    <header>
      <h1 class="text-aligns  color">About Us</h1>


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
        
    <section class="showcase">
      <p>
        Indulge in a night of elegance and extravagance like no other at
        our exclusive members-only event. At The Foreigners, we bring together
        a hand-picked selection of elite clientele for an unforgettable
        evening of sophistication and luxury. Immerse yourself in a world of
        immaculate energy and good vibes, as our experienced team ensures
        that every detail is taken care of to provide you with a seamless
        and unforgettable experience. Our top-tier venue, exceptional
        entertainment, and bespoke services are all tailored to provide our
        VIP members with an unparalleled level of luxury. With an eclectic
        mix of world-class DJs and performers across a range of genres,
        there's something for everyone at The Foreigners. So join us for a
        top-tier night and elevate your life to new heights.
      </p>
    </section>

    @endsection


</x-second-main>