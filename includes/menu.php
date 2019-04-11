<?php

class MgMenu

{

/**
 * Fonction qui ajoute un menu au thème
 */

    function register_main_menu()
        {
     register_nav_menu('main-menu', 'Menu principal dans le header.');

        }


/**
 * Fonction qui ajoute des attributes au balise a des nav_menu
 * @param $att 
 * @param $item
 * @param $args
 * @return void
 */

   public static function ajout_menu_a_class($atts, $item, $args)
   {
    $class = '';
    $atts['class'] = $class;
    return $atts;
   }

}
add_action('after_setup_theme', [MgMenu::class,'register_main_menu']);

add_filter('nav_menu_link_attributes', [MgMenu::class,'ajout_menu_a_class'],10, 3);