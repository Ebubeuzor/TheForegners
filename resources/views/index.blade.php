
<x-main-index>
  @section('content')
    
  <div class="slideshow-container">
        <div class="mySlides fade slide1">
          <div class="text glow"  style="font-weight: 700;">The Foreigners</div>
        </div>
        
        <div class="mySlides fade slide2">
          <div class="text glow">Caption Two</div>
        </div>
        
        <div class="mySlides fade slide3">
          <div class="text glow">Caption Three</div>
        </div>
    </div>

    <div style="text-align:center; margin-top: -50px;">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
    </div>
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


<!--About-->
<section id="service" class="hero">
    <div class="title-text" style="margin: 30px; font-weight: 600;">
        <h1><b>About Foreigners</b></h1>
    </div>
    <div section="service-box">
        <div class="img-box container">
            <a href="#">
            <div class="single-service">
                <img src="./assets/music.jpeg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Music</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa nesciunt architecto totam hic debitis explicabo perferendis ea, minima dignissimos, ipsam nemo maxime tenetur laboriosam sunt possimus nulla animi quas! Architecto.</p>
                </div>
           
            </div>
        </a>
            <a href="#">
            <div class="single-service">
                <img src="./assets/sports.webp">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Sports</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime placeat consequuntur est veritatis ex minima quasi autem incidunt quos in. Non voluptates suscipit incidunt veritatis perspiciatis officia, ea dicta reiciendis?</p>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="single-service">
                <img src="./assets/fashion.jpeg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Fashion</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum delectus dolor officiis numquam. Expedita quo error nesciunt necessitatibus repellendus delectus repellat, inventore ullam debitis maxime, pariatur eos eveniet quis deleniti.</p>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="single-service">
                <img src="./assets/Events.jpeg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Events</h3>
                    <hr>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore distinctio neque exercitationem aliquam. Exercitationem, odit libero maiores laudantium natus dicta voluptatum, cum pariatur assumenda reiciendis temporibus fugiat ullam asperiores ipsum.</p>
                </div>
            </div>
        </a>
</section>

<!-- Talent -->
<section>
    <div class="title-text" style="margin: 30px; font-weight: 600;">
        <h1><b> Talent Spotlight</b></h1>
    </div>
    <div class="talent_spotlight">
        <div class="talent-spotlight__content" data-reveal-animation-child="slide-up-full">
            <div class="eyebrow">Featured</div>
        <h3 class="talent-spotlight__heading heading-1">Snoh Aalegra </h3>
<div class="link-list">
<div class="link-item">
<a class="link" href="#">
<span>Learn More</span>
<span class="u-hidden-visually">&#x2192;</span>

</a>
</div>
</div>
</div>
<div class="talent-spotlight__side-block-list" data-reveal-animation-child="slide-up-full">
    <div class="talent-spotlight__side-block-item">
<div class="side-block side-block--statistic">
<div class="eyebrow side-block__eyebrow">Trending Talent</div>			<div class="side-block__graphic">
<div class="animated-sprite-stat-1"></div>
</div>
<div class="eyebrow heading-1 heading-1--bold side-block__number">
<span aria-hidden="false" style="display: none;">1.2</span>
<span aria-hidden="true" data-counting-value="1.2">1.2</span><span>Million</span>		</div>
<div class="paragraph paragraph--small side-block__secondary-text">Total Followers</div>		<div class="paragraph paragraph--small side-block__tertiary-text">@SnohAalegra</div>				<div class="side-block__link">
<a class="link" href="#">
<span></span>
<span class="u-hidden-visually">Talent Spotlight</span>

</a>
</div>
</div>
</div>
    <div class="talent-spotlight__side-block-item">
<div class="side-block side-block--text">
<div class="eyebrow side-block__eyebrow">Latest News</div>			<div class="side-block__graphic">
<div class="animated-sprite-stat-1"></div>
</div>
<div class="paragraph paragraph--small side-block__secondary-text">On July 9th Snoh Aalegra released her highly anticipated record, 'Temporary Highs In The Violet Skies'. The record features Tyler, The Creator, James Fauntleroy and more!</div>						<div class="side-block__link">
<a class="link" href="#">
<span></span>
<span class="u-hidden-visually">Talent Spotlight</span>

</a>
</div>
</div>
</div>
</div>
        <div class="talent-spotlight__background-image media-container">


        </div>
    </div>
</section>




<!-- News -->

<div class="title-text">
    <h1><b>Annoucement</b></h1>
</div>

<article class="post">
  
    <div>
      <div class="absolute-bg" style="background-image: url('https://source.unsplash.com/f9C8ytxaItI/2000x1200');"></div>
    </div>
    <div class="post__container">
      <span class="post__category"> News Update</span>
      
      <div class="post__content">
        <header>
          <time class="post__time">Jan 22 2024</time>
          <h1 class="post__header"><span>Visiting</span> <span>the</span> <span>beach</span></h1>
        </header>
      
        <p class="post__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a augue justo. In mollis erat in elit tempus, feugiat luctus ex sollicitudin. Maecenas euismod tortor dolor, vel blandit augue aliquam sit amet. Vestibulum et eros mollis, laoreet nisi ac, condimentum sapien. Aliquam nec nunc enim.</p>
      </div>
      <div class="post__link">
        <a href="#">Learn More&#x2192;</a>
      </div>
    </div>
  </article>

  @endsection
</x-main-index>
