<?php
/*
Plugin Name: insertar artículos
Description: Plugin para la insertar datos en 'wp_articles' 
Author: Samir Chalá Cuesta
*/



$title = "Titulo del artículo desde el plugin";
$name = "Nombre del artículo desde el plugin";
$img_url = "https://instagram.feoh2-1.fna.fbcdn.net/v/t51.2885-15/552448553_18532853329043228_8547431944946255431_n.jpg?stp=dst-jpg_e35_tt6&efg=eyJ2ZW5jb2RlX3RhZyI6IkNBUk9VU0VMX0lURU0uaW1hZ2VfdXJsZ2VuLjE0NDB4MTc5NS5zZHIuZjgyNzg3LmRlZmF1bHRfaW1hZ2UuYzIifQ&_nc_ht=instagram.feoh2-1.fna.fbcdn.net&_nc_cat=108&_nc_oc=Q6cZ2QEHMP3lcUfxtIFn7do0uocyJ-wsf9COWSKJfyuRUrAhWM9EwwRjFoXTlszIT4KRr14&_nc_ohc=rNhp1l_UWaQQ7kNvwHldKsc&_nc_gid=i94Z6HCg-ymiBDY7ee5G2w&edm=AP4sbd4BAAAA&ccb=7-5&ig_cache_key=MzcyNjY3MTgyMjA1NTEyNjc5MA%3D%3D.3-ccb7-5&oh=00_Afao64AzwUcPvA0X_a-fKs0bZ72DIfndc5m0lHHaidSgYg&oe=68D786A6&_nc_sid=7a9f4b";
$description = "Descripción del artículo desde el plugin";
$date = "2225-12-25 00:00:00";
$status = "published";
$author = "Samir";
$content = "";
$post_id = 1;
$article_source_link = "https://www.radionacional.co/cultura/ferias-y-fiestas/fiestas-de-san-pacho-2025-en-quibdo-programacion";


//hook para ejecutar la función al activar el plugin
register_activation_hook(__FILE__, 'insert_custom_articles_table');
function insert_custom_articles_table()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'articles'; // 'wp_articles'

    global $title;
    global $name;
    global $img_url;
    global $description;
    global $date;
    global $status;
    global $author;
    global $content;
    global $post_id;
    global $article_source_link;

    $wpdb->insert(
        $table_name,
        array(
            'article_title' => $title,
            'article_name' => $name,
            'article_img_url' => $img_url,
            'article_description' => $description,
            'article_date' => $date,
            'article_status' => $status,
            'article_author' => $author,
            'article_content' => $content,
            'article_post_id' => $post_id,
            'article_source_link'  => $article_source_link
        ),
        array('%s','%s','%s','%s','%s','%s','%s','%s','%d','%s')
    );
}

