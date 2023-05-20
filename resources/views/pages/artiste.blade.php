
<x-second-main>

    @section('style')
        
    <style>
      header {
        background: linear-gradient(rgba(0, 0, 0, 0.5), #0f0f0f7d),
          url("https://media.npr.org/assets/img/2014/06/26/ed_sheeran_pub1_credit_ben_watts-53f939ba8a80e6fb1480a527e26e3fe68550f7f6-s1100-c50.jpg");
        height: 70vh;
        width: 100%;
        background-size: cover;
        background-position: center;
        position: relative;
        margin: 70px 0
        }

        @media screen and (max-width: 850px) {
        .header{
            display: none;
        
        }

        header{
            margin: 0;
        }

        
        }

        .showcase {
            width: 80%;
            margin: 100px auto;
        }

        .showcase h1 {
            text-align: center;
        }

        .text-aligns {
            text-align: center;
            padding: 200px 0;
            font-size: 4rem;
            font-weight: 600;
            color: #fff;
        }

        .sub_p {
            position: absolute;
            top: 0;
            color: #fff;
            font-size: 14px;
            padding: 20px;
            text-transform: uppercase;
            text-shadow: -1px -1px 0 #000, -1px 0 0 #000, -1px 1px 0 #000,
            0 -1px 0 #000, 0 0 0 #000, 0 1px 0 #000, 1px -1px 0 #000, 1px 0 0 #000,
            1px 1px 0 #000;
        }

        .Artisteicons {
            top: 30px;
            color: #fff;
            padding: 0 5px 0 0;
        }

        .follow_artiste {
            display: flex;
            position: absolute;
            top: 40px;
            left: 20px;
        }

        .about-artiste{
            padding: 30px 40px;
        }
    </style>
    @endsection

    @section('header')
        
    <header>
      <h1 class="text-aligns color">Ed Sheeran</h1>
      <h1 class="sub_p">Follow Artiste</h1>
      <div class="follow_artiste">
        <a href="">
          <p class="Artisteicons"><i class="fa-brands fa-facebook"></i></p>
        </a>
        <a href="">
            <p class="Artisteicons"><i class="fa-brands fa-spotify"></i></p>
          </a>
          <a href="">
            <p class="Artisteicons"><i class="fa-solid fa-music"></i></p>
          </a>
          <a href="">
            <p class="Artisteicons"><i class="fa-brands fa-instagram"></i></p>
          </a>
      </div>

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
        <img src="https://i.postimg.cc/j5RRCtb2/menu.png" id="menu" />
      </div>
    </header>
    @endsection

    @section('section')
        
    <section class="about-artiste">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero temporibus inventore saepe. Fugiat eos necessitatibus quidem laborum, sapiente sunt quibusdam, mollitia totam voluptas tenetur quisquam modi nemo numquam ut distinctio?
        Quis inventore, accusamus perferendis expedita, laudantium, quidem tempora cupiditate vel iusto neque saepe impedit numquam corporis. Voluptatibus dolore eos adipisci consectetur, optio neque unde est non expedita quia laborum laudantium!
        Dolorem architecto aliquid quibusdam animi odit. Voluptatem cum perferendis fuga sapiente iste nam dolore labore dolorem quis nihil dolores a nisi iusto similique incidunt, quaerat voluptatum veritatis! Magni, adipisci cupiditate!
        Aspernatur maxime facilis, modi cumque enim nam iste ullam, unde officia et consequuntur quae recusandae ipsa aliquam voluptate eius nesciunt, sapiente quisquam! Maxime officia totam corrupti sit molestias nihil modi.</p>

        <br>

        <br>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, odio quam. Quibusdam doloremque tempore incidunt expedita? Quo quis non maxime! Quia cum repellat sit provident impedit nemo qui quisquam error.</p>
    </section>
    
    @endsection

    @section('script')
    
    <script src="../script/script.js"></script>
    <script src="../script/observer.js"></script>
    
    @endsection


</x-second-main>