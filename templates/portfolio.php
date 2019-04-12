<?php

$text_intro_archi = get_theme_mod('portfolio-archi-text', __('Texte accroche'));
$text_intro_web = get_theme_mod('portfolio-web-text', __('Texte accroche'));

?>

<!-- SECTION PORTFOLIO -->
<div id="portfolio" class="section">
  <div class="fullpage__slide">
    <!-- architecture -->
      <!-- texte & buton link-->
    <div class="title__demi">
      <h2 class="title__text__demi js-letter">University<br>PROJECTS</h2>
      <div class="border-yellow js-letter">
        <span class="barre1"></span>
        <span class="barre2 js-letter"></span>
      </div>
      <p class="title__lead js-letter"><?= $text_intro_archi; ?></p>
      <div class="btn-wrap js-letter">
        <a class="btn" href="./portfolio-architecture.html"> Show me more</a>
      </div>
    </div>
      <!-- image link -->
    <a class="image22 image_myworkarchitecture" href="/portfolio-architecture.html">
      <div class="image__over2">
        <div class="image__cover2"></div>
        <div class="image__cover2"></div>
      </div>
    </a>
    <!-- webdesign -->
      <!-- texte & buton link-->
    <div class="title__demi2">
      <h2 class="title__text__demi js-letter">Coding<br>PROJECTS</h2>
      <div class="border-yellow js-letter">
        <span class="barre1"></span>
        <span class="barre2 js-letter"></span>

      </div>
      <p class="title__lead js-letter"><?= $text_intro_web; ?></p>
      <div class="btn-wrap js-letter">
        <a class="btn" href="./portfolio-webdesign.html"> Show me more</a>
      </div>
    </div>
      <!-- image link -->
    <a class="image2 image_myworkwebdesign" href="/portfolio-webdesign.html">
      <div class="image__over2">
        <div class="image__cover2"></div>
        <div class="image__cover2"></div>
      </div>
    </a>
    <!-- number page 01 -->
    <div class="page-num">
      <p>01</p>
    </div>
  </div>
</div>