<?php

// Agragando menu de navegacion
function gymfitness_menus(){
    register_nav_menus(array(
        'menu-principal' => __('Menu principal', 'gymfitness')
    ));
}

add_action('init', 'gymfitness_menus');

// Conectando css al archivo
function gymfitness_scripts_styles() {
    // Agregando normalize
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    // Agregando hoja de estilo
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
}

add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');