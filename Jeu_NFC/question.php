<?php require ('liste_question.php')?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
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
    <meta property="og:url" content="">
    <meta property="og:image" content="img">
    <meta property="og:site_name" content="Le KiKeKoi">
    <meta property="og:locale" content="fr">

    <!-- Bootstrap core CSS -->
    <link href="../old/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css">


    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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
          <div class="col align-self-center justify-content-center">
            <?php echo $randomNumber; ?><br>
            <?php echo $question; ?>
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
