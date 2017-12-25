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
  <link rel="stylesheet" href=<?= get_template_directory_uri() . "/angebot/angebot.css"; ?>>

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
                  <a class="nav-link nav__link " href=<?= get_template_directory_uri() . "index.php"; ?>>Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link nav__link" href=<?= get_template_directory_uri() . "/team/index.php"; ?>>Team</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link nav__link" href=<?= get_template_directory_uri() . "/news/index.php"; ?>>News</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link nav__link nav__link--active" href=<?= get_template_directory_uri() . "/angebot/index.php"; ?>>Angebot</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link nav__link" href=<?= get_template_directory_uri() . "/kontakt/index.php"; ?>>Kontakt</a>
              </li>
          </ul>
      </div>
  </nav>


<br></br>
<br></br>

<!-- Unser Angebot -->
<section class="header01">
    <div class="header01__image">
        <div class="header01__image__container">
            <p class="header01__image__container__line">Unser Angebot</p>
        </div>
    </div>
</section>


<!-- Latein -->
<section class="header02">
    <div class="header02__image">
        <div class="header02__image__container">
            <p class="header02__image__container__line">Latein</p>
        </div>
    </div>
    <div class="header02__button">
        <div class="header02__button__container">
        </div>
    </div>
</section>


<br></br>


<!-- Text mit Bild 1 -->
<div class="container">
  <div class="row">

		<div class="col-md-6">
			<p font="Open Sans", align="justify">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
				<br></br>
				Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
				<br></br>
			</p>
		</div>

		<div class="col-md-6">
			<img src="zwei.jpg"></img>
		</div>
  </div>
</div>


<br></br>


<!-- Standard -->
<section class="header03">
    <div class="header03__image">
        <div class="header03__image__container">
            <p class="header03__image__container__line">Standard</p>
        </div>
    </div>
    <div class="header03__button">
        <div class="header03__button__container">
        </div>
    </div>
</section>


<br></br>


<!-- Text mit Bild 2 -->
<div class="container">
  <div class="row">

		<div class="col-md-6">
			<img src="zwei.jpg"></img>
		</div>

    <div class="col-md-6">
			<p font="Open Sans", align="justify">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
				<br></br>
				Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
				<br></br>
			</p>
		</div>

  </div>
</div>


<br></br>


<!-- Camps -->
<section class="header02">
    <div class="header02__image">
        <div class="header02__image__container">
            <p class="header02__image__container__line">Camps</p>
        </div>
    </div>
    <div class="header02__button">
        <div class="header02__button__container">
        </div>
    </div>
</section>


<br></br>


<!-- Text mit Bild 3 -->
<div class="container">
  <div class="row">

		<div class="col-md-6">
			<p font="Open Sans", align="justify">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
				<br></br>
				Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
				<br></br>
			</p>
		</div>

		<div class="col-md-6">
			<img src="zwei.jpg"></img>
		</div>
  </div>
</div>


<br></br>


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
