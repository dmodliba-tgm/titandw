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
  <link rel="stylesheet" href=<?= get_template_directory_uri() . "/impressum/impressum.css"; ?>>

  <!-- Ajax CDN -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

  <!-- Smooth Scroll -->
  <script type="text/javascript" src=<?= get_template_directory_uri() . "/js/smoothscroll.js"; ?>></script>

  <!--TweenMax CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>

  <!-- Nav JS -->
  <script type="text/javascript" src=<?= get_template_directory_uri() . "/js/nav.js"; ?>></script>

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
                  <a class="nav-link nav__link" href="#">News</a>
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


<!-- Impressum -->
<section class="header01">
    <div class="header01__image">
        <div class="header01__image__container">
            <p class="header01__image__container__line">Impressum</p>
        </div>
    </div>
</section>

<div class="container">
  <div class="row">

		<div class="col-md-12">
			<p font="Open Sans", align="justify">
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.

        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
        <br></br>
        Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.

        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.

        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
        <br></br>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.

        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
      </p>
		</div>
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
                <a href="#" class="footer__link">
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
