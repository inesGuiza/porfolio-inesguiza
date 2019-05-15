<?php

$text_intro = get_theme_mod('portfolio-about-text', __('Texte accroche'));
?>
<!-- SECTION ABOUT ME  -->
<div id="about" class="section">
  <div class="fullpage__slide">
    <!-- texte & buton link-->
    <div class="title">
      <h2 class="title__text js-letter">About Me</h2>
      <div class="border-yellow js-letter">
        <span class="barre1"></span>
        <span class="barre2 js-letter"></span>
      </div>
      <div class="col-9">
        <p class="title__lead js-letter"><?= $text_intro; ?></p>
      </div>
      <!-- I love and I believe in Communication, Design <br> and Travel.   -->
      <div class="btn-wrap js-letter">
        <a class="btn" href="<?php echo get_page_link('13'); ?>"> Tell me more</a>
      </div>
    </div>
    <!-- image link -->
    <a class="image image_about" href="<?php echo get_page_link('13'); ?>">
      <div class="couverture">
        <div class="image__over">
          <div class="image__cover"></div>
          <div class="image__cover"></div>
        </div>
      </div> 
    </a>
    <div class="border-jaune"></div>
    <!-- number page 02 -->
    <div class="page-num">
      <p>02</p>
    </div>

  </div>
</div>