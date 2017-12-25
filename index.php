<html>
    <head>
        <meta charset="utf-8">
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <!-- Font Awesome CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- own stylesheet -->
        <link rel="stylesheet" href=<?= get_template_directory_uri() . "/index.css"; ?>>

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
                        <a class="nav-link nav__link nav__link--active" href=<?= get_template_directory_uri() . "index.php"; ?>>Home</a>
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
                        <a class="nav-link nav__link" href=<?= get_template_directory_uri() . "/kontakt/index.php"; ?>>Kontakt</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- VIREPORT -->
        <section class="header">
            <div class="header__image">
                <div class="header__image__container">
                    <p class="header__image__container__line">Wir sind Latein</p>
                    <p class="header__image__container__line">Wir sind Standard</p>
                    <p class="header__image__container__line">Wir sind Tanz</p>
                </div>
            </div>
            <div class="header__button">
                <div class="header__button__container">
                    <a href="#intro" class="smoothScroll">
                        <i class="fa fa-2x fa-chevron-down header__button__container__icon"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- VORSTELLUNG -->
        <section class="introduction">
            <span style="display: block; margin-top: -4rem; padding-bottom: 4rem;" id="intro" class="introduction__spacer"> </span>

            <div class="container">
                <div class="row">
                    <div class="col-12 introduction__container">
                        <p class="introduction__container__text">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        </p>
                        <img src=<?= get_template_directory_uri() . "/assets/img_02.jpg"; ?> class="introduction__container__img">
                    </div>
                </div>
            </div>

            <div class="container-fluid introduction__hl-container">
                <div class="row">
                    <div class="col-6 introduction__hl-container__headline">
                        <h1>
                            Vorstellung
                        </h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- PARALLAX -->
        <section>
            <div class="parallax parallax--after-intro">
                <p class="parallax__container">
                    Hier steht ein Slogan!
                </p>
            </div>
        </section>

        <!-- ANGEBOT OVERVIEW -->
        <section class="angebot">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 angebot__headline">
                        <h1>
                            Angebot
                        </h1>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 angebot__container">
                        <div class="row">
                            <div class="col-lg-4 angebot__container__sub">
                                <img src=<?= get_template_directory_uri() . "/assets/img_03.jpg"; ?> class="angebot__container__sub__img">
                                <h2 class="angebot__container__sub__headline">
                                    Latein
                                </h2>
                                <p class="angebot__container__sub__text">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                </p>
                                <div class="text-center">
                                    <a href="#" class="angebot__container__sub__link">Mehr erfahren</a>
                                </div>
                                <hr class="angebot__container__sub__line">
                            </div>

                            <div class="col-lg-4 angebot__container__sub">
                                <img src=<?= get_template_directory_uri() . "/assets/img_03.jpg"; ?> class="angebot__container__sub__img">
                                <h2 class="angebot__container__sub__headline">
                                    Standard
                                </h2>
                                <p class="angebot__container__sub__text">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                </p>
                                <div class="text-center">
                                    <a href="#" class="angebot__container__sub__link">Mehr erfahren</a>
                                </div>
                                <hr class="angebot__container__sub__line">
                            </div>

                            <div class="col-lg-4 angebot__container__sub">
                                <img src=<?= get_template_directory_uri() . "/assets/img_03.jpg"; ?> class="angebot__container__sub__img">
                                <h2 class="angebot__container__sub__headline">
                                    Camps
                                </h2>
                                <p class="angebot__container__sub__text">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                </p>
                                <div class="text-center">
                                    <a href="#" class="angebot__container__sub__link">Mehr erfahren</a>
                                </div>
                                <hr class="angebot__container__sub__line">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
