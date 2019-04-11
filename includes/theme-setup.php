<?php 

class MgThemeSetup
{


/**
  * Ajout de la fonctionnalité d'un ajout d'image pour les posts/articles
  */

  public static function ajout_image_article()
  {
      //Ajout de la fonctionnalité d'ajout d'image pour les posts
      add_theme_support('post-thumbnails');
      $test = 0;
  }

}

  // Ajout d'un écouteur d'événement pour activer les images mises en avant pour les posts/articles
  add_action('init', [MgThemeSetup::class, 'ajout_image_article']);