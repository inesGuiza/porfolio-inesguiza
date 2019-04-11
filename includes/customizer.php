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

       $wp_customize->add_panel('portfolio-panel-about', [
           'title' => __('Section About Introduction'),
           'description' => __('Personnalisation de la section introduction about')
       ]);

       //Ajout d'une section à un panel défini sinon la section ne sera pas visible
       // Attention une section ne s'affichera que si elle contient des controls. 

       $wp_customize->add_section('about-intro-section-text', [
           'panel' => 'portfolio-panel-about',
           'title' => __('Personnalisation du texte'),
           'description' => __('Personnalisez le texte')
       ]);

       //Ajout d'un setting qui contiendra des information dans la base de donnée sous la clé correspondant à son id(premier param)
       $wp_customize->add_setting('portfolio-about-text', [
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
   }
}
   add_action('customize_register', [MgCustomizer::class, 'ajout_personnalisation_about']);