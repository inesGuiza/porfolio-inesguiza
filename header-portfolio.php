<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="ines" content="">

  <?php 

  // Ajout des css de manière dynamique grâce à functions.php
  wp_head();
  ?>

    <title>Portfolio Ines Guiza</title>

</head>

<body >

<!-- PAGE 1 // ACCEUIL --> 
<header id="myHeader" class="mon-bg"> 

    <!-- Navigation -->
    <nav  class="navbar navbar-dark">
      <a class="name" href="./">Inès Guiza</a>
      <!-- menu -->
      <div class="wrap align-items-center">
        <div class="icons">
          <a href="https://twitter.com/Ines_gza" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://www.linkedin.com/in/in%C3%A8s-guiza-b510b8109/" target="_blank"><i class="fab fa-linkedin"></i></a>
          <a href="https://www.instagram.com/ines_gza/?hl=fr" target="_blank"><i class="fab fa-instagram"></i></a>
          

        </div>
        <button class="navbar-toggler menuIcon" type="button" data-toggle="collapse" data-target="#menu-ines" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <a href="<?php echo get_page_link('36'); ?>"></a>
          </span>

        </button>
        <?php
        wp_nav_menu([
          'menu_class' => '',
          'theme-location' => 'main-menu',
          'container' => ''
          ]);
          ?>
      </div>
  </nav>

</header>