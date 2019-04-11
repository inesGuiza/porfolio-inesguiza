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

    // Ajout des scripts js

    wp_enqueue_script('porfolio-ines',get_template_directory_uri() . '/js/main.js');
    
    // <!-- Optional JavaScript -->
   

    // <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
   wp_enqueue_script('jquery-perso', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.slim.min.js', null, true); 

   wp_enqueue_script('boostrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', ['jquery-perso'], null, true);

    

    // <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

}

add_action('wp_enqueue_scripts','ajout_css_js');

?>