<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JDR JAVA</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">JDR</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Règles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Concept</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">apero</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">a propos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Bienvenue sur le JDR</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Le JDR est un jeu tour par tour avec un systeme de carte distribué de manière random contre une IA. Ce projet est développer par deux développeur pas bien riche mais motiver a mélanger plusieur technologie comme JAVA php et REACT js</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">ALLEZ on joue ?</a>
          </div>
        </div>
      </div>
    </header>
    <style>
      .bg-primary {
  background-image: url("http://www.impressive-gaming.net/wp-content/uploads/2015/04/game_background.jpg"); }
      </style>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Le fonctionnement rapide</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Au démarrage de la partie </p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Que la guerre commence !</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Principe de base</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">ressources</h3>
              <p class="text-muted mb-0">Apprend a gérer t'est ressource pour gagné contre l'IA.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">explore de nouveau monde</h3>
              <p class="text-muted mb-0">Découvre de nouveau décord au fils des combats</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">suis ton historique de combat</h3>
              <p class="text-muted mb-0">Augmente t'est chance de combat en tirant partie des statistique en temps réel.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Plus de vie !!</h3>
              <p class="text-muted mb-0">la vie c'est bien la garder c'est mieux apprend a gérer ta vie au fils du combat ;)</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">lance ta partie maintenant</h2>
        <a class="btn btn-light btn-xl sr-button" href="<?php
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        echo $actual_link."/data";?>">A l'attaque !!</a>
      </div>
    </section>
    <style>
      .bg-dark {
  background-image: url("https://images4.alphacoders.com/557/thumb-1920-557144.jpg"); }
      </style>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>123-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
