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

/**
 * Fonction qui ajoute un menu au thème
 */

 function register_main_menu()
 {
     register_nav_menu('main-menu', 'Menu principal dans le header.');

}

add_action('after_setup_theme', 'register_main_menu');

/**
 * Fonction qui ajoute des attributes au balise a des nav_menu
 * @param $att 
 * @param $item
 * @param $args
 * @return void
 */

 function ajout_menu_a_class($atts, $item, $args)
 {
     $class = '';
     $atts['class'] = $class;
     return $atts;
 }

 add_filter('nav_menu_link_attributes', 'ajout_menu_a_class',10, 3);

 /**
  * Ajout de la fonctionnalité d'un ajout d'image pour les posts/articles
  */

  function ajout_image_article()
  {
      //Ajout de la fonctionnalité d'ajout d'image pour les posts
      add_theme_support('post-thumbnails');
      $test = 0;
  }

  // Ajout d'un écouteur d'événement pour activer les images mises en avant pour les posts/articles
  add_action('init', 'ajout_image_article');
?>