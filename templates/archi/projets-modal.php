<?php
$args = [
    'post_type' => 'archi'
];

$query = new WP_Query($args);
while ($query->have_posts()) : $query->the_post(); ?>

        <div class="col-md-3 item-projet text-center">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
            </a>
            <h3 class="text-center">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>
        </div>
    
<?php endwhile; 
wp_reset_postdata();
?>