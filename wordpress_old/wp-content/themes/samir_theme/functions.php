
<?php

function sanpacho_page_scripts()
{
    
    // importando Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    
    //cargando estilos
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0');
    
    //encolando JavaScript personalizado desde la carpeta js
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0');
    
    // Encolando Bootstrap JS y sus dependencias 
    wp_enqueue_script('bootstrap-bundle-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true);
}
add_action('wp_enqueue_scripts', 'sanpacho_page_scripts');


