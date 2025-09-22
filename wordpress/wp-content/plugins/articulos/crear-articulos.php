<?php
/*
Plugin Name: Crear tabla artículos
Description: Plugin para la creación de artículos en una tabla personalizada
Author: Samir Chalá Cuesta
*/


function create_custom_articles_table()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'articles'; // 'wp_articles'

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        article_id mediumint(9) NOT NULL AUTO_INCREMENT,
        article_title varchar(255) NOT NULL,
        article_name varchar(255) NOT NULL,
        article_img_url varchar(255) ,
        article_description text NOT NULL,
        article_date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        article_status varchar(20),
        article_author varchar(255),
        article_content longtext ,
        article_post_id mediumint(9) ,
        article_source_link varchar(255) ,
        PRIMARY KEY (article_id)
    ) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta( $sql );
    
}
//hook para ejecutar la función al activar el plugin
register_activation_hook(__FILE__,'create_custom_articles_table');

