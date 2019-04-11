<?php

function ajout_css_js()

{
    // Ajout des scripts css
    //Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css' );

    // <!-- style css -->
    wp_enqueue_style('portfolio-ines', get_template_directory_uri() . '/style.css');

    // <!-- icons -->
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/vendor/fontawesome/icons/css/all.css');
    wp_enqueue_script('fontawesome-js', get_template_directory_uri() . '/vendor/fontawesome/icons/js/all.js');

    // <!-- fonts google -->
    wp_enqueue_style('poiret', "https://fonts.googleapis.com/css?family=Poiret+One");
    wp_enqueue_style('raleway',"https://fonts.googleapis.com/css?family=Raleway+Dots|Raleway:400,600" );
    
}

add_action('wp_enqueue_scripts','ajout_css_js');

?>