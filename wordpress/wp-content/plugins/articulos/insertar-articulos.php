<?php
/*
Plugin Name: insertar artículos
Description: Plugin para la insertar datos en 'wp_articles'
Author: Samir Chalá Cuesta
*/

// Hook para ejecutar la función al activar el plugin.
register_activation_hook(__FILE__, 'insert_custom_articles_on_activate');

// Función para insertar datos en la tabla 'wp_articles'.
function insert_custom_articles_on_activate() {
    global $wpdb;

    // Array asociativo para insertar los datos con su respectivo.
    $article_data = array(
        //Clave               => Valor
        'article_title'       => "Titulo del artículo desde el plugin 2",
        'article_name'        => "Nombre del artículo desde el plugin 2",
        'article_img_url'     => "https://instagram.feoh2-1.fna.fbcdn.net/v/t51.2885-15/552448553_18532853329043228_8547431944946255431_n.jpg?stp=dst-jpg_e35_tt6&efg=eyJ2ZW5jb2RlX3RhZyI6IkNBUk9VU0VMX0lURU0uaW1hZ2VfdXJsZ2VuLjE0NDB4MTc5NS5zZHIuZjgyNzg3LmRlZmF1bHRfaW1hZ2UuYzIifQ&_nc_ht=instagram.feoh2-1.fna.fbcdn.net&_nc_cat=108&_nc_oc=Q6cZ2QEHMP3lcUfxtIFn7do0uocyJ-wsf9COWSKJfyuRUrAhWM9EwwRjFoXTlszIT4KRr14&_nc_ohc=rNhp1l_UWaQQ7kNvwHldKsc&_nc_gid=i94Z6HCg-ymiBDY7ee5eG2w&edm=AP4sbd4BAAAA&ccb=7-5&ig_cache_key=MzcyNjY3MTgyMjA1NTEyNjc5MA%3D%3D.3-ccb7-5&oh=00_Afao64AzwUcPvA0X_a-fKs0bZ72DIfndc5m0lHHaidSgYg&oe=68D786A6&_nc_sid=7a9f4b",
        'article_description' => "Descripción del artículo desde el plugin",
        'article_date'        => "2025-12-25 00:00:00",
        'article_status'      => "Draft",
        'article_author'      => "Samir",
        'article_content'     => "",
        'article_post_id'     => 1,
        'article_source_link' => "https://www.radionacional.co/cultura/ferias-y-fiestas/fiestas-de-san-pacho-2025-en-quibdo-programacion"
    );

    $table_name = $wpdb->prefix . 'articles'; // 'wp_articles'

    // Usa $wpdb->insert para insertar los datos

    //https://developer.wordpress.org/reference/classes/wpdb/insert
    $wpdb->insert(
        $table_name,
        $article_data,
        /* marcadores de formato anti inyeccion SQL */
        array(
            '%s', // article_title
            '%s', // article_name
            '%s', // article_img_url
            '%s', // article_description
            '%s', // article_date
            '%s', // article_status
            '%s', // article_author
            '%s', // article_content
            '%d', // article_post_id
            '%s'  // article_source_link
        )
    );

}