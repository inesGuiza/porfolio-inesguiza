<?php 

get_header($name= 'portfolio');

?>

<main>
    <div class="ines-container">
        <div class="page-top">
            <div class="page-top__inner">
                <a href="./#porfolio" class="back-arrow">
                <!-- flèche encore à mettre -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="34" viewBox="0 0 67 34" style="transform: translateX(0%);">
                    <g fill="none" fill-rule="evenodd" stroke="#FFF" stroke-linecap="round" transform="translate(2 1)"><path stroke-width="2" d="M0,15.5533333 L64,15.5533333"></path><polyline stroke-width="2" points="15.556 0 0 15.556 15.556 31.111"></polyline></g>
                    </svg>
                </a>
<?php while (have_posts()) : the_post(); ?>

                <div class="title-port">
                    <h2 class="title__text">
                        
                    <?php the_title(); ?>

                        University 
                        <br>
                        PROJECTS
                    </h2>
<?php endwhile; ?>
                    <div class="border-yellow js-toRight">
                        <span class="barre1"></span>
                        <span class="barre2"></span>
                        <p class="title__lead">
                            Architecture
                        </p>
                    </div>
                    <div class="btn-wrap">
                        <a href="" class="btn" target="_blank">For web dev projects</a>
                    </div>
                </div>

                <div class="composition-projects single-post-container">
                    <div class="post-content">

<?php wp_reset_query(); ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
<?php endwhile; ?>
                        <div class="portfolio-link row">
                            <?php

                            $args = [
                                'post_type' => 'post'
                            ];

                            $query = new WP_Query($args);
                            while ($query->have_posts()): $query->the_post(); ?>
                            <div class="col-md-2">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                                </a>
                                <h3 class="text-center">
                                    <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                    </a>
                                </h3>
                            </div>
                            <div class="col-2 images-project image_2">
                            <a href=""></a>
                            </div>
                            <div class="col-2 images-project image_3">
                            <a href=""></a>
                            </div>
                            <div class="col-2 images-project image_4">
                            <a href=""></a>
                            </div>
                        </div>
<?php endwhile; ?>
                    </div>

                </div>
            </div>
        </div>
        <div class="container single-post-container">
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>


<?php

get_footer();

?>