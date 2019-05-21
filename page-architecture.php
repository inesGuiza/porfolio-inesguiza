<?php 

get_header($name= 'portfolio');

get_template_part('templates/archi/banner');

get_template_part('templates/archi/projets');

get_template_part('templates/archi/projets', 'modal');

?>

                <div class="composition-projects single-post-container">
                    <div class="post-content">

<?php wp_reset_query(); ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
<?php endwhile; ?>
                        <div class="portfolio-link row">
                            <?php

                            $args = [
                                'post_type' => 'archi'
                            ];

                            $query = new WP_Query($args);
                            while ($query->have_posts()): $query->the_post(); ?>
                            <div class="col-md-3">
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

get_footer($name= 'archi');

?>