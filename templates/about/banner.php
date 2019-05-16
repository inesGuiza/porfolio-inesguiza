<?php

$text_intro = get_theme_mod('portfolio-about-text', __('Texte accroche'));
?>
<main class="about">
        <div id="banner-about" class="section page-about">

            <a class="arrow-retour" href="../#about">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="34" viewBox="0 0 67 34" style="transform: translateX(0%);"><g fill="none" fill-rule="evenodd" stroke="#FFF" stroke-linecap="round" transform="translate(2 1)"><path stroke-width="2" d="M0,15.5533333 L64,15.5533333"></path><polyline stroke-width="2" points="15.556 0 0 15.556 15.556 31.111"></polyline></g>
                </svg>
            </a>   
            <div class="fullpage__slide">
                <!-- texte & buton link-->
                    
                    <div class="title_about">
                        <h2 class="title__text js-letter">About Me</h2>
                        <div class="border-yellow js-letter">
                            <span class="barre1"></span>
                            <span class="barre2 js-letter"></span>
                        </div>
                        <div class="col-8">                       
                        <p class="title__lead js-letter"><?= $text_intro; ?></p>
                        </div> 
                        <!-- I love and I believe in Communication, Design <br> and Travel.   -->
                        <div class="btn-wrap js-letter">
                            <a class="btn" href="<?php echo get_page_link('13'); ?>"> Show me more</a>
                        </div>
                    </div>
                    <!-- image link -->
                    <a class="image image_about" href="<?php echo get_page_link(''); ?>">
                    
                    </a>
                
            </div>
        </div>
