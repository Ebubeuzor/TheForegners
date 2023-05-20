<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/styles/about.css">
    <link rel="stylesheet" href="../assets/styles/style.css">
    <link rel="stylesheet" href="../assets/styles/news.css">
</head>
<body>
  <nav class="header">
    <a href="" class="main_logo">The Foreigners</a>
    <ul class="nav">
        <li><a href="{{route('index')}}">HOME</a></li>
        <li><a href="{{route('news')}}">NEWS</a></li>
        <li><a href="{{route('about')}}">ABOUT</a></li>
        <li><a href="{{route('register')}}">REGISTER</a></li>
        <li><a href="{{route('event')}}">EVENTS</a></li>
        <li><a href="{{route('music')}}">MUSIC</a></li>
    </ul>
  </nav>

        @yield('style')

        
        @yield('header')

        @yield('section')

      <footer class="footer"  style="margin-top: 0;">
        <div class="footer-left col-md-4 col-sm-6">
          <p class="about">
            <span> About the company</span> Ut congue augue non tellus bibendum, in varius tellus condimentum. In scelerisque nibh tortor, sed rhoncus odio condimentum in. Sed sed est ut sapien ultrices eleifend. Integer tellus est, vehicula eu lectus tincidunt,
            ultricies feugiat leo. Suspendisse tellus elit, pharetra in hendrerit ut, aliquam quis augue. Nam ut nibh mollis, tristique ante sed, viverra massa.
          </p>
          <div class="icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
        <div class="footer-center col-md-4 col-sm-6">
          <div>
            <i class="fa fa-map-marker"></i>
            <p><span> Street name and number</span> City, Country</p>
          </div>
          <div>
            <i class="fa fa-phone"></i>
            <p> (+00) 0000 000 000</p>
          </div>
          <div>
            <i class="fa fa-envelope"></i>
            <p><a href="#"> office@company.com</a></p>
          </div>
        </div>
        <div class="footer-right col-md-4 col-sm-6">
          <h2> Company<span> logo</span></h2>
          <p class="menu">
            <a href="{{route('index')}}"> Home</a> |
            <a href="#"> About</a> |
            <a href="#"> Services</a> |
            <a href="#"> Portfolio</a> |
            <a href="#"> News</a> |
            <a href="#"> Contact</a>
          </p>
          <p class="name"> Company Name &copy; 2023</p>
        </div>
      </footer>

      <script>
        var menuBtn = document.getElementById("menuBtn")
  var sideNav = document.getElementById("sideNav")
  var menu = document.getElementById("menu")
  sideNav.style.right == "-250px";
  menuBtn.onclick = function() {
      if (sideNav.style.right == "-250px") {
          sideNav.style.right = "0";
          menu.src = "https://i.postimg.cc/cJRss6PP/close.png";
      } else {
          sideNav.style.right = "-250px";
          menu.src = "https://i.postimg.cc/j5RRCtb2/menu.png";
      }
  }
  
  $(document).ready(function() {
  
      $("a").on('click', function(event) {
  
          if (this.hash !== "") {
  
              event.preventDefault();
              var hash = this.hash;
  
              $('html, body').animate({
                  scrollTop: $(hash).offset().top
              }, 800, function() {
                  window.location.hash = hash;
              });
          }
      });
  });
  </script>
    @yield('script')
</body>
</html>