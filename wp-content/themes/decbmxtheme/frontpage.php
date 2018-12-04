<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php wp_title(); ?></title>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet">
  <!-- Icons -->
  <link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" rel="stylesheet" crossorigin="anonymous">
  <!-- Custom styles for this template -->
  <link href="css/application.css" rel="stylesheet">
  <!-- Slick CSS -->
  <link href="css/slick.css" rel="stylesheet" type="text/css" />
  <!-- Add the new slick-theme.css if you want the default styling -->
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
</head>

<body>
  <div class="wrapper">
    <div class="wrapper">
      <nav class="navbar navbar-expand-lg custom-toggler">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="justify-content-center mx-auto navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link grow" href="#bio">Bio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link grow" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link grow" href="#shows">Shows</a>
            </li>
            <li class="nav-item">
              <a class="nav-link grow" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="wrapper">
      <div class="row">
        <div class="col-lg-6">
          <video autoplay muted loop id="myVideo" class="mx-auto">
            <source src="videos/cover_vid_2.webm" type="video/webm">
          </video>
        </div>
      </div>
    </div>
    <div class="wrapper fullheight">
      <div class="row">
        <img class="col-xl-6 col-lg-8 col-md-10 col-sm-12 logo" src="images/main-logo8.png" alt="main logo">
      </div>
      <div class="chev-div">
        <a href="#bio">
          <svg viewBox="0 0 68 33" class="chevron-down">
            <path d="m1 3 27 27c3 3 7 3 10 0l29-28-3-3-29 28c-1 1-3 1-4 0l-27-27-3 3z"></path>
          </svg>
        </a>
      </div>
    </div>

    <div class="wrapper bg-eggshell">
      <section class="container">
        <div id="bio" class="row mob-padding">
          <div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 py-4">
            <h1>Bio</h1>
            <p>My name is Andy Hale and I am a professional BMX flatland rider. I compete around the UK and also perform at a variety of different types of events.
              From cruise ships to schools, films to trade events, I have years of experience performing in shows.
              Whether you would like my skills as part of a stage show, or a school workshop teaching young students some basic BMX techniques, I can do it for you!
              <!-- <br>
              <br>
              <a href="bio.html">READ MORE</a> -->
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Slick Gallery -->
    <div class="container-fluid">
      <div id="gallery" class="row slick-container">
        <div class="slick-mob slider container">
          <img src="images/slick1.jpg" alt="image 1">
          <img src="images/slick2.jpg" alt="image 2">
          <img src="images/slick3.jpg" alt="image 3">
          <img src="images/slick4.jpg" alt="image 4">
          <img src="images/slick5.jpg" alt="image 5">
          <img src="images/slick6.jpg" alt="image 6">
        </div>
        <div class="arrows">
            <svg id="next-arrow" enable-background="new 0 0 477.175 477.175" version="1.1" viewBox="0 0 477.175 477.175" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
              <path d="m360.73 229.08l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1 0s-5.3 13.8 0 19.1l215.5 215.5-215.5 215.5c-5.3 5.3-5.3 13.8 0 19.1 2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4l225.1-225.1c5.3-5.2 5.3-13.8 0.1-19z"/>
            </svg>
            <svg id="prev-arrow" enable-background="new 0 0 477.175 477.175" version="1.1" viewBox="0 0 477.175 477.175" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
              <path d="m360.73 229.08l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1 0s-5.3 13.8 0 19.1l215.5 215.5-215.5 215.5c-5.3 5.3-5.3 13.8 0 19.1 2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4l225.1-225.1c5.3-5.2 5.3-13.8 0.1-19z"/>
            </svg>
        </div>
      </div>
    </div>

    <div id="shows" class="wrapper bg-eggshell">
      <div class="row">
        <div class="col-xl col-lg-11 col-md-11 col-sm-11 p-4 m-4 my-auto mx-auto">
          <h1>Shows</h1>
          <p>My shows can add a great showpiece to your event. Kids love a BMX show whether it is at their school in term time or as part of a local festival.
            They can be tailored for your specific needs such as including workshops, or bringing along an extra rider for synchronised spinning tricks!</p>
        </div>
        <div class="col-xl col-lg-6 col-md-6 col-sm-6 p-0">
            <div class="shows-image-container">
                <img class="shows-image filter" src="images/shows1.jpg" alt="">
            </div>
            <div class="shows-image-container">
                <img class="shows-image filter" src="images/shows2.jpg" alt="">
            </div>
          </div>
          <div class="col-xl col-lg-6 col-md-6 col-sm-6 p-0">
            <div class="shows-image-container">
                <img class="shows-image filter" src="images/shows3.jpg" alt="">
            </div>
            <div class="shows-image-container">
                <img class="shows-image filter" src="images/shows6.jpg" alt="">
            </div>
          </div>
      </div>
    </div>

    <section id="contact">
      <div class="wrapper bg-eggshell">
        <div class="row">
          <div class="col-lg-5 col-md-6 mb-3 mb-md-0 offset-lg-1 px-4 py-4">
            <div class="card h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope mb-2"></i>
                <h4 class="text-uppercase m-0">Email</h4>
                <hr class="my-4">
                <div>
                  <p class="emailtext">
                    <a href="#">andyhalebmx@hotmail.com</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 mb-3 mb-md-0 px-4 py-4">
            <div class="card h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt mb-2"></i>
                <h4 class="text-uppercase m-0">Phone</h4>
                <hr class="my-4">
                <div>
                  <p>
                    07800771260
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--The div element for the map -->
    <div id="map"></div>
    <script>
      // Initialize and add the map
      function initMap() {
        // The location of Bristol
        var bristol = { lat: 51.4545045, lng: -2.5880147 };
        // The map, centered at Bristol
        var map = new google.maps.Map(document.getElementById("map"), {
          zoom: 11,
          center: bristol,
          disableDefaultUI: true,
          styles: [{"featureType":"all",
                    "elementType":"geometry.fill",
                    "stylers":[{"weight":"2.00"}]},

                    {"featureType":"all",
                    "elementType":"geometry.stroke",
                    "stylers":[{"color":"#9c9c9c"}]},

                    {"featureType":"all",
                    "elementType":"labels.text",
                    "stylers":[{"visibility":"on"}]},

                    {"featureType": "administrative.province",
                     "elementType": "labels.text",
                     "stylers": [{"visibility": "off"}]},

                    {"featureType":"landscape",
                    "elementType":"all",
                    "stylers":[{"color":"#f2f2f2"}]},

                    {"featureType":"landscape",
                    "elementType":"geometry.fill",
                    "stylers":[{"color":"#ecf6ea"}]},

                    {"featureType":"landscape.man_made",
                    "elementType":"geometry.fill",
                    "stylers":[{"color":"#eeeeee"}]},

                    {"featureType":"poi",
                    "elementType":"all",
                    "stylers":[{"visibility":"off"}]},

                    {"featureType":"road",
                    "elementType":"all",
                    "stylers":[{"saturation":-100},
                    {"lightness":15}]},

                    {"featureType":"road",
                    "elementType":"geometry.fill",
                    "stylers":[{"color":"#c4c4c4"}]},

                    {"featureType":"road",
                    "elementType":"labels.text.fill",
                    "stylers":[{"color":"#7b7b7b"}]},

                    {"featureType":"road",
                    "elementType":"labels.text.stroke",
                    "stylers":[{"color":"#ffffff"}]},

                    {"featureType":"road.highway",
                    "elementType":"all",
                    "stylers":[{"visibility":"simplified"}]},

                    {"featureType":"road.arterial",
                    "elementType":"labels.icon",
                    "stylers":[{"visibility":"off"}]},

                    {"featureType":"transit",
                    "elementType":"all",
                    "stylers":[{"visibility":"off"}]},

                    {"featureType":"water",
                    "elementType":"all",
                    "stylers":[{"color":"#46bcec"},
                    {"visibility":"on"}]},

                    {"featureType":"water",
                    "elementType":"geometry.fill",
                    "stylers":[{"color":"#99c5ff"}]},

                    {"featureType":"water",
                    "elementType":"labels.text.fill",
                    "stylers":[{"color":"#070707"}]},

                    {"featureType":"water",
                    "elementType":"labels.text.stroke",
                    "stylers":[{"color":"#ffffff"}]}]

        });
        // The marker
        var marker = new google.maps.Marker({ position: bristol, map: map });
      }
    </script>

    <!-- Footer -->
    <footer class="page-footer font-small footer bg-eggshell">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="flex-center">
              <div class="social-links">
                <a href="https://www.instagram.com/andybmxhale" target="_blank" class="mx-2 grow">
                  <span class="fab fa-instagram footer-icon px-3"></span>
                </a>
                <a href="https://twitter.com/AndrewH14005603" target="_blank" class="mx-2 grow">
                  <span class="fab fa-twitter footer-icon px-3"></span>
                </a>
                <a href="https://www.strava.com/athletes/629253" target="_blank" class="mx-2 grow">
                  <span class="fab fa-strava footer-icon px-3"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright text-center py-3">© 2018 Andrew Hale
      </div>
    </footer>

    <!-- Google Maps API -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_hBW136GdqB4oxn7VcdyHUQ_tSAHXibE&callback=initMap"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
    <!-- Custom Scripts -->
    <script src="js/app.js"></script>


  </div>
</body>
</html>