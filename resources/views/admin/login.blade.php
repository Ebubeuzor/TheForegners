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

        <label for="email">Email<span class="star-required">*</span></label>
        <input
          type="email"
          name="email"
          id="email"
          placeholder="mail@website.com"
          required
        />

        <label for="password"
          >Password <span class="star-required">*</span></label
        >
        <input
          type="text"
          name="password"
          id="password"
          required
        />
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
