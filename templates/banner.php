<?php

$lastname = get_theme_mod('portfolio-acceuil-text', __('Texte accroche'));

?>
<main class="mon-bg">
    <!-- Section Présentation -->
    <div id="top" class="section1 scroller">
      <div class="full-page-1 scroller">
        <!-- left side -->
        <div class="title title-top">
          <h1 class="title__text0 js-letter"> <?php echo get_bloginfo('name'); ?> <br><?= $lastname; ?></h1>
          <div class="border-yellow js-letter">
            <span class="barre1"></span>
            <span class="barre2 js-letter"></span>
          </div>
          <p class="title__lead js-letter"> <?php echo get_bloginfo('description'); ?> <br> freelance Full Stack <br> Web Developer.</p>
          <p class="title__lead2 js-letter">Based in E4°20'55".50N°51'01".</p>
<!-- <br> (Brussels in case) -->
        </div>
        <!-- right side -->
        <div class="dynamique">
          <div class="portfolio_dynamique">
            <p class="portfolio_text">Portfolio</p>
            <p class="quote">"Qui ne progresse pas chaque jour, regresse chaque jour." <br> <span class="quote-author">Confucius</span>
          </p>
          </div>
        </div>

        <a class="image0 image_ines" href="./">
          <div class="image__over">
            <div class="image__cover"></div>
            <div class="image__cover"></div>
          </div>
        </a>
        <div class="border-jaune-banner"></div>

      </div>
    </div>

  <!-- menu déroulant -->
<div id="barres-nav" class="left">
  <ul>
    <li>
      <a href="#top" class="active">
      <span></span>
      </a>
    </li>
    <li>
      <a href="#portfolio" class="">
        <span></span>
      </a>
    </li>
    <li >
      <a href="#about" class="">
        <span ></span>
      </a>
    </li>
    <li>
      <a href="#contact" class="">
        <span ></span>
      </a>
    </li>
  </ul>
</div>
