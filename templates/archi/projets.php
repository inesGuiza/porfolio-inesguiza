                <div class="composition-projects single-post-container">
                    <div class="post-content">

                        <?php wp_reset_query(); ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                        <div class="portfolio-link row">
                            <?php get_template_part('templates/archi/projets', 'modal'); ?>

                        </div>
                    </div>
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