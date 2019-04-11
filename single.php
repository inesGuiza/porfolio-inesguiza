<?php

get_header();

?>

<div class="container single-post-container">
    <?php while (have_posts()) : the_post(); ?>
    <div class="post-thumbnail text-center mt-5">
        <?php
        // Ajout de l'image thumbnail du post en choissant parmi les 4 tailles de base
        // thumbnail - medium - mediu_large - large
        // possible de passer un 2e paramètre voir la doc
        the_post_thumbnail('medium_large')
        ?>
</div>
    <h2 class="text-center text-uppercase text-white mt-5 mb-4"><?php the_title(); ?></h2>
    <div class="post-content text-center text-white">
        <?php the_content(); ?>
</div>
<?php endwhile; ?>

</div>

<?php

get_footer();

?>