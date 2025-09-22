
<?php
//funcion para crear la tabla personalizada al activar el tema
function wp_create_custom_articles_table()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'articles'; // 'wp_articles'

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        article_id mediumint(9) NOT NULL AUTO_INCREMENT,
        article_title varchar(255) NOT NULL,
        article_name varchar(255) NOT NULL,
        article_img_url varchar(255) NOT NULL,
        article_description text NOT NULL,
        article_date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        article_status varchar(20) NOT NULL,
        article_author varchar(255) NOT NULL,
        article_content longtext NOT NULL,
        article_post_id mediumint(9) NOT NULL,
        article_source_link varchar(255) NOT NULL,
        PRIMARY KEY (article_id)
    ) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta( $sql );
    
}

function sanpacho_page_scripts()
{
    /* invocando la funcion para crear la tabla personalizada desde el archivo de functions */
    wp_create_custom_articles_table();

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

/* 

# table name = wp_articles

# (Pk) (int) = article_id
# field (string)= article_title
# field (string)= article_name
# field (string)= article_img_url
# field (string) = article_despcription
# field (date) = article_date
# field (string) = article_status
# field (string) = article_author
# field (string) = article_content
# field (int) = article_post_id
*/