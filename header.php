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

<!-- hijacking: on/off - animation:none / scaleDown/rotate/gallery/catch/opacity/fixed/parallax -->
<body  >

<!-- PAGE 1 // ACCEUIL --> 
<header id="myHeader"> 

    <!-- Navigation -->
    <nav  class="navbar navbar-dark">
      <a class="name" href="<?php echo get_site_url(); ?>">Inès Guiza</a>
      <!-- menu -->
      <div class="wrap align-items-center">
        <div class="icons">
          <a href="https://twitter.com/Ines_gza" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://www.linkedin.com/in/in%C3%A8s-guiza-b510b8109/" target="_blank"><i class="fab fa-linkedin"></i></a>
          <a href="https://www.instagram.com/ines_gza/?hl=fr" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>

        <button id="aIcon" class="navbar-toggler menuIcon" type="button" data-toggle="collapse" data-target="#menu-ines" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span id="barettes" class="navbar-toggler-icon"></span>
</button>

      </div>
    </nav>

  <!-- <nav id="menu-ines" class="global-nav d-none">
    
    <ul class="global-nav__list">
        <li>
            <a href="<?php //echo get_site_url(); ?>">HOME</a>
        </li>
        <li>
            <a href="#portfolio">WORKS</a>
        </li>
        <li>
            <a href="<?php //echo get_page_link('41'); ?>">BLOG</a>
        </li>
        <li>
            <a href="<?php //echo get_page_link('13'); ?>">ABOUT</a>
        </li>
        <li>
            <a class="js-contact" href="#contact">CONTACT</a>
        </li>
    </ul> -->
    <?php
        wp_nav_menu([
          'menu_class' => 'global-nav__list',
          'theme-location' => 'main-menu',
          'container' => 'nav',
          'container_class' => 'global-nav d-none',
          'container_id' => 'menu-ines'
          ]);
          ?>
  <!-- </nav> -->

</header>