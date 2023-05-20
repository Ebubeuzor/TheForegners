<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Foreigners</title>
    <link rel="stylesheet" href="../assets/styles/about.css" />
    <link rel="stylesheet" href="../assets/styles/style.css" />
    <link rel="shortcut icon" href="../assets/image0.jpeg" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <style>
      header .video-container {
      z-index: -1;
      position: absolute;
      top: 0;
      left: 0;
      height: 110vh;
      width: 100vw;
      }

      BODY{
        background:linear-gradient(rgba(0, 0, 0, 0.5), #2929297d), url('https://static.wixstatic.com/media/ba9574_789d79244bf94b998bbfd09be18b3c50~mv2.jpg/v1/crop/x_1069,y_0,w_3862,h_4000/fill/w_1120,h_1160,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/IMG_2644-min_JPG.jpg');
      }
    </style>
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
   
    <div class="container" style="width: 80%; margin: auto;">
      <form
        action="{{ route('user.store') }}"
        method="post"
        class="sign-form"
        id="sign-form"
        autocomplete="on"
      >
        <br />
        @csrf

        <div class="google-guide-container">
          <div class="hr-left"></div>
          <p class="guide-google">Join Now!!</p>
          <div class="hr-right"></div>
        </div>

        <label for="username"
          >Full Name<span class="star-required">*</span></label
        >
        <input
          type="text"
          name="name"
          id="username"
          placeholder="Name"
          autofocus
          required
        />

        <label for="email">Email<span class="star-required">*</span></label>
        <input
          type="email"
          name="email"
          id="email"
          placeholder="mail@website.com"
          required
        />

        <label for="instagramURL"
          >Instagram <span class="star-required">*</span></label
        >
        <input
          type="text"
          name="instagram_url"
          id="instagramURL"
          placeholder="iG"
          required
        />
        <label for="">Date of Birth</label>

        <div class="flex">
          <div class="flex flex-col px-4">

            <label for="dobDay" class="block py-4 p-1"></label
            ><input
              min="0"
              name="dobDay"
              id="dobDay"
              maxlength="2"
              minlength="1"
              type="number"
              class="mt-0 block w-full required mr-4 p-2 border-0 border-b-2 border-white-200 focus:ring-0 focus:border-black"
              value=""
              placeholder="Day"
            />
          </div>
          <div class="flex flex-col px-4">
            <label for="dobMonth" class="block py-4 p-1"></label
            ><input
              min="0"
              name="dobMonth"
              id="dobMonth"
              maxlength="2"
              minlength="1"
              type="number"
              class="mt-0 block mr-4 w-full required p-2 border-0 border-b-2 border-white-200 focus:ring-0 focus:border-black"
              value=""
              placeholder="Month"
            />
          </div>
          <div class="flex flex-col px-4">
            <label for="dobYear" class="block py-4 p-1"></label
            ><input
              min="0"
              name="dobYear"
              id="dobYear"
              maxlength="4"
              minlength="4"
              type="number"
              class="mt-0 block w-full required p-2 border-0 border-b-2 border-white-200 focus:ring-0 focus:border-black"
              value=""
              placeholder="Year"
            />
          </div>
        </div>
        @foreach ($errors->all() as $error)
          <div style="font-size: 13px; font-weight: 700; color: white;">
              {{ $error }}
          </div>
        @endforeach
        <br />

        <input
          type="checkbox"
          name="terms-agree"
          id="terms-agree"
          required
        />
        <p class="sentence-agree">
          <a href="" style="color: #fff">Consent to Marketing emails</a>
        </p>

        <input type="submit" value="Submit" id="submit" />

        <!-- <p class="info">&copy;2023 CODEY All rights reserved.</p> -->
      </form>
    </div>
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
    <script src="../script/script.js"></script>
  </body>
</html>
