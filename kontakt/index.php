<?php require_once('D:\xampp\htdocs\projects\titandw\wp-load.php'); ?>
<html>

<head>
	<link rel="stylesheet" href="stylesheet.css">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

  <meta charset="utf-8">
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- own stylesheet -->
  <link rel="stylesheet" href=<?= get_template_directory_uri() . "/kontakt/kontakt.css"; ?>>

  <!-- Ajax CDN -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

  <!-- Smooth Scroll -->
  <script type="text/javascript" src=<?= get_template_directory_uri() . "/js/smoothscroll.js"; ?>></script>

  <!--TweenMax CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>

  <!-- Nav JS -->
  <script type="text/javascript" src=<?= get_template_directory_uri() . "/js/nav.js"; ?>></script>

  <style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
      height: 25rem;
      width: 50rem;
    }
    /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

  </style>

</head>
<body>

<!-- NAV -->
<nav class="navbar navbar-toggleable-md fixed-top nav"><!-- .nav own class -->
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>
    <a class="navbar-brand" href=<?= home_url();?>>
        <img src=<?= get_template_directory_uri() . "/assets/logo_01.jpg"; ?> class="nav__brand">
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-auto">
            <li class="nav-item">
                <a class="nav-link nav__link" href=<?= get_template_directory_uri() . "index.php"; ?>>Home</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link nav__link" href=<?= get_template_directory_uri() . "/team/index.php"; ?>>Team</a>
            </li>
            <li class="nav-item">
                	<a class="nav-link nav__link" href=<?= get_template_directory_uri() . "/news/index.php"; ?>>News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav__link" href=<?= get_template_directory_uri() . "/angebot/index.php"; ?>>Angebot</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav__link nav__link--active" href=<?= get_template_directory_uri() . "/kontakt/index.php"; ?>>Kontakt</a>
            </li>
        </ul>
    </div>
</nav>


<br></br>
<br></br>

<!-- Kontakt -->
<section class="header01">
    <div class="header01__image">
        <div class="header01__image__container">
            <p class="header01__image__container__line" align="right">Kontakt</p>
        </div>
    </div>
</section>


<div style="text-align:center;">
<img style="margin:0 auto;" src="placeholder.jpg" width="73%">
</div>


<br></br>


<!-- Anfahrt -->
<section class="header02">
    <div class="header02__image">
        <div class="header02__image__container">
            <p class="header02__image__container__line">Anfahrt</p>
        </div>
    </div>
</section>

<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
		<div class="col-md-8">
			<div id="map"></div>

      <script>
        function initMap() {
          var location = {lat: 48.384556, lng: 16.514913};
          var map = new google.maps.Map(document.getElementById("map"), {
              zoom: 15,
              center: location
          });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            })
        }
      </script>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbyyNsZLXjSq1qASnByXPKNxMn4H9qV_o&callback=initMap"></script>
      <br>
        <p>Max Mustermann</p>
        <p>+43 650 1234567</p>
        <p>max.mustermann@gmail.com</p>
		</div>
    <div class="col-md-2"></div>
  </div>
</div>


<!-- FOOTER -->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <p class="footer__headline">
                    Der Verein
                </p>
                <a href=<?= get_template_directory_uri() . "index.php"; ?> class="footer__link">
                    Home
                </a><br>
                <a href=<?= get_template_directory_uri() . "/team/index.php"; ?> class="footer__link">
                    Über Uns
                </a><br>
                <a href="#" class="footer__link">
                    Trainer
                </a><br>
                <a href="#" class="footer__link">
                    Paare
                </a><br>
            </div>
            <div class="col-4">
                <p class="footer__headline">
                    Informationen
                </p>
                <a href=<?= get_template_directory_uri() . "/news/index.php"; ?> class="footer__link">
                    News
                </a><br>
                <a href=<?= get_template_directory_uri() . "/angebot/index.php"; ?> class="footer__link">
                    Angebot & Preise
                </a><br>
                <a href="#" class="footer__link">
                    Turnierplan - national
                </a><br>
                <a href="#" class="footer__link">
                    Turnierplan - internationale
                </a><br>
            </div>
            <div class="col-4">
                <p class="footer__headline">
                    Details
                </p>
                <a href=<?= get_template_directory_uri() . "/impressum/index.php"; ?> class="footer__link">
                    Impressum
                </a><br>
                <a href=<?= get_template_directory_uri() . "/kontakt/index.php"; ?> class="footer__link">
                    Kontakt
                </a><br>
                <a href="#" class="footer__link">
                    Reglement
                </a><br>
            </div>
        </div>
    </div>
</section>

<!-- POST-FOOTER -->
<section class="post-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                Ⓒ UTSS Titan - Deutsch Wagram
            </div>
        </div>
    </div>
</section>
</body>
</html>
