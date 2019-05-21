<?php

?>

<main class="portfolio-architecture">
    <div class="ines-container">
        <div class="page-top">
            <div class="page-top__inner">
                <a href="./#porfolio" class="back-arrow">
                <!-- flèche -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="34" viewBox="0 0 67 34" style="transform: translateX(0%);">
                    <g fill="none" fill-rule="evenodd" stroke="#FFF" stroke-linecap="round" transform="translate(2 1)"><path stroke-width="2" d="M0,15.5533333 L64,15.5533333"></path><polyline stroke-width="2" points="15.556 0 0 15.556 15.556 31.111"></polyline></g>
                    </svg>
                </a>
<?php while (have_posts()) : the_post(); ?>

                <div class="title-port ">
                    <h2 class="title__text0-archi text-center ">
                        
                    <?php the_title(); ?>
                        University PROJECTS
                    </h2>
<?php endwhile; ?>
                
                    <div class="btn-wrap-archi">
                        <a href="<?php echo get_page_link('45'); ?>" class="btn" target="_blank">For web dev projects</a>
                    </div>
                </div>