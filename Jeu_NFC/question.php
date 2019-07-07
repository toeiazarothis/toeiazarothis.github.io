_<?php require ('liste_question.php')?>
<!DOCTYPE html>
<html lang="fr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Jeu de société">
    <meta name="author" content="Azarothis">

    <title>KiKeKoi</title>

    <!-- Opengraph -->
    <meta property="og:title" content="KiKeKoi un Jeu de société a faire en debut de soirée">
    <meta property="og:type" content="">
    <meta property="og:url" content="kikekoi.rf.gd">
    <meta property="og:image" content="img">
    <meta property="og:site_name" content="Le KiKeKoi">
    <meta property="og:locale" content="fr">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/agency.css" rel="stylesheet">

    <!--Custom favicon-->
    <link rel="icon" type="image/png" href="logo.png"/>
  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="intro-text">
        <div class="intro-lead-in"><?php echo $themeQuestion ?>!</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#question">Let's Go <i class="far fa-thumbs-up"></i></a>
      </div>
    </header>

    <!-- Choix du theme -->
    <section id="question">
      <div class="container">
        <div class="row">
          <div class="col align-self-center justify-content-center text-center">
            <p>
              randomNumberQuestion = <?php echo $randomNumberQuestion; ?><br>
              randomNumberTheme = <?php echo $randomNumberTheme; ?><br>
              Theme du random = <?php echo $theme; ?> <br>
              ThemeDeLaQuestion = <?php echo $themeQuestion; ?> <br>
              Question = <?php echo $question; ?><br>
            </p>

            <button type="button" class="btn btn-success btn-xl" onclick='location.reload();'> Recharger la page</button>

          </div>
        </div>
      </div>
    </section>




    <!-- Bootstrap core JavaScript -->
    <script src="../old/vendor/jquery/jquery.min.js"></script>
    <script src="../old/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="../old/vendor/jquery-easing/jquery.easing.min.js"></script>
  </body>



</html>
