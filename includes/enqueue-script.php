<?php 

class EnqueueScript

{
    /**
     * Fonction qui va ajouter des scripts dynamiquement afin que l'on puisse les inclure dans le thème avec wp_head() et wp_footer()
     * on instancie la méthode grâce à public
     */
    // static permet d'utiliser la méthode directement depuis la clas sans devoir l'instancier

    public static function ajout_css_js()

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

    wp_enqueue_script('porfolio-ines',get_template_directory_uri() . '/js/main.js',[],null,true);
       

    // <!-- jQuery first, then Popper.js, then Bootstrap JS -->

   wp_enqueue_script('jquery-perso', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.slim.min.js', null, true); 

   wp_enqueue_script('boostrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', ['jquery-perso'], null, true);

    

    // <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    }

}

// Nous créeons une instance de la classe EnqueueScript afin de la passer en paramètre dans notre add_action
// $enqueue_script = new EnqueueScript();

add_action('wp_enqueue_scripts', [EnqueueScript::class,'ajout_css_js']);