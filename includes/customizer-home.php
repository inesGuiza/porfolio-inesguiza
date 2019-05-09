<?php 

class MgCustomizer
{


/**
   * Fonction qui ajout la possibilité de customiser la partie personnalisation du thème
   * @param $wp_customize
   */

   public static function ajout_personnalisation_about($wp_customize)
   {
       // Ajout d'un panel avec des options
       // Attention, un panel ne s'affichera que s'il contient des sections
// Introduction
       $wp_customize->add_panel('portfolio-panel-introduction', [
           'title' => __('Section Introduction'),
           'description' => __('Personnalisation des introductions de chaque section')
       ]);

       //Ajout d'une section à un panel défini sinon la section ne sera pas visible
       // Attention une section ne s'affichera que si elle contient des controls. 

       $wp_customize->add_section('about-intro-section-text', [
           'panel' => 'portfolio-panel-introduction',
           'title' => __('Personnalisation du texte About'),
           'description' => __('Personnalisez le texte')
       ]);

       $wp_customize->add_section('archi-intro-section-text', [
        'panel' => 'portfolio-panel-introduction',
        'title' => __('Personnalisation du texte des projets Architecture'),
        'description' => __('Personnalisez le texte')
        ]);

        $wp_customize->add_section('web-intro-section-text', [
            'panel' => 'portfolio-panel-introduction',
            'title' => __('Personnalisation du texte des projets Web'),
            'description' => __('Personnalisez le texte')
            ]);
       //Ajout d'un setting qui contiendra des information dans la base de donnée sous la clé correspondant à son id(premier param)
       $wp_customize->add_setting('portfolio-about-text', [
           'type' => 'theme_mod',
           'sanitize_callback' => 'sanitize_textarea_field'
       ]);

       $wp_customize->add_setting('portfolio-archi-text', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        $wp_customize->add_setting('portfolio-web-text', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
            ]);
       //Ajout d'un control(un label avec input et autre information). Le control doit être attaché à une section ainsi qu'à un setting.
       //Attention un control ne s'affiche que s'il est lié à un setting.
       $wp_customize->add_control('portfolio-about-text-control',
       [
           'section' => 'about-intro-section-text',
           'settings' => 'portfolio-about-text',
           'label' => __('Texte accroche'),
           'description' => __('Personnalisez le texte accroche'),
           'type' => 'textarea'
       ]);

       $wp_customize->add_control('portfolio-archi-text-control',
       [
           'section' => 'archi-intro-section-text',
           'settings' => 'portfolio-archi-text',
           'label' => __('Texte accroche'),
           'description' => __('Personnalisez le texte accroche'),
           'type' => 'textarea'
       ]);

       $wp_customize->add_control('portfolio-web-text-control',
       [
           'section' => 'web-intro-section-text',
           'settings' => 'portfolio-web-text',
           'label' => __('Texte accroche'),
           'description' => __('Personnalisez le texte accroche'),
           'type' => 'textarea'
       ]);
}

// Portfolio

// About 

// Contact
   

   public static function ajout_personnalisation_acceuil($wp_customize)
   {

// ACCEUIL

    $wp_customize->add_panel('portfolio-panel-acceuil', [
     'title' => __('Section Acceuil'),
     'description' => __('Personnalisation de la section acceuil')
     ]);

     $wp_customize->add_section('acceuil-lastname-section-text', [
     'panel' => 'portfolio-panel-acceuil',
     'title' => __('Personnalisation du titre principale'),
     'description' => __('Personnalisez le texte')
     ]);

     $wp_customize->add_setting('portfolio-acceuil-text', [
     'type' => 'theme_mod',
     'sanitize_callback' => 'sanitize_textarea_field'
     ]);

     $wp_customize->add_control('portfolio-acceuil-text-control',
    [
        'section' => 'acceuil-lastname-section-text',
        'settings' => 'portfolio-acceuil-text',
        'label' => __('Texte accroche'),
        'description' => __('Personnalisez le texte accroche'),
        'type' => 'textarea'
      ]);
   }

}
   add_action('customize_register', [MgCustomizer::class, 'ajout_personnalisation_about' ]);

   add_action('customize_register', [MgCustomizer::class,  'ajout_personnalisation_acceuil']);