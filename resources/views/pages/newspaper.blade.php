
<x-second-main>

    @section('style')
        
    <style>
      header {
        background: linear-gradient(rgba(0, 0, 0, 0.5), #0f0f0f7d),
          url("https://media.gq-magazine.co.uk/photos/5de8deee64857c0008aaafe7/16:9/pass/DAVIDO_FRANKFIEBER_20231022_8-sm-scaled.jpg");
        height: 70vh;
        width: 100%;
        background-size: cover;
        background-position: center;
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

    <section class=" section" style="padding: 20px;">
      <p style="color: #202020; padding: 20px; text-transform: uppercase; font-weight: 600;">More in News</p>
    
            <div class="content-wrapper">
      
             
            
              <div class="news-card">
                <a href="#" class="news-card__card-link"></a>
                <img src="https://images.pexels.com/photos/248486/pexels-photo-248486.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="" class="news-card__image">
                <div class="news-card__text-wrapper">
                  <h2 class="news-card__title">Amazing Forth Title that is Quite Long</h2>
                  <div class="news-card__post-date">Jan 29, 2018</div>
                  <div class="news-card__details-wrapper">
                    <p class="news-card__excerpt">Lorem ipsum dolor sit amet!</p>
                    <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                  </div>
                </div>
              </div>
            
              <div class="news-card">
                <a href="#" class="news-card__card-link"></a>
                <img src="https://images.pexels.com/photos/206660/pexels-photo-206660.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="" class="news-card__image">
                <div class="news-card__text-wrapper">
                  <h2 class="news-card__title">Amazing Fifth Title</h2>
                  <div class="news-card__post-date">Jan 29, 2018</div>
                  <div class="news-card__details-wrapper">
                    <p class="news-card__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est pariatur nemo tempore repellat? Ullam sed officia iure architecto deserunt distinctio&hellip;</p>
                    <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                  </div>
                </div>
              </div>
            
              <div class="news-card">
                <a href="#" class="news-card__card-link"></a>
                <img src="https://images.pexels.com/photos/210243/pexels-photo-210243.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="" class="news-card__image">
                <div class="news-card__text-wrapper">
                  <h2 class="news-card__title">Amazing 6<sup>th</sup> Title</h2>
                  <div class="news-card__post-date">Jan 29, 2018</div>
                  <div class="news-card__details-wrapper">
                    <p class="news-card__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est pariatur nemo tempore repellat? Ullam sed officia.</p>
                    <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                  </div>
                </div>
              </div>
            
            </div>
          </div>
        </div>
      </section>
    @endsection

    @section('script')
    <script src="../script/observer.js"></script>
    @endsection

</x-second-main>