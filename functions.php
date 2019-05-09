<?php
//cette fonction nous permet d'importer des fichiers
// découverte de la fonction get_template_directory() qui renvoie le chemin du dossier du thème actif! à ne pas confondre get_template_directory_uri qui renvoi une url

 define('INCLUDE_DIR', get_template_directory() . "/includes");
 
 require_once(INCLUDE_DIR . '/enqueue-script.php');

require_once(INCLUDE_DIR . '/menu.php');

require_once(INCLUDE_DIR . '/theme-setup.php');

require_once(INCLUDE_DIR . '/customizer-home.php');

require_once(INCLUDE_DIR . '/customizer-about.php');

require_once(INCLUDE_DIR . '/customizer-blog.php');

require_once(INCLUDE_DIR . '/customizer-archi.php');

require_once(INCLUDE_DIR . '/customizer-web.php');



require_once('plugins/plugins.php');

  
?>