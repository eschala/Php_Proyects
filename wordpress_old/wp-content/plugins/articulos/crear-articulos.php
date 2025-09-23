<?php
/*
Plugin Name: Crear tabla artículos
Description: Plugin para la creación de artículos en una tabla personalizada
Author: Samir Chalá Cuesta
*/
function create_custom_articles_table()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'articles';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        article_id mediumint(9) NOT NULL AUTO_INCREMENT,
        article_title varchar(255) NOT NULL,
        article_name varchar(255) NOT NULL,
        article_img_url text DEFAULT '' NOT NULL,
        article_description text NOT NULL,
        article_date datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        article_status varchar(255),
        article_author varchar(255),
        article_content longtext,
        article_post_id mediumint(9),
        article_source_link text DEFAULT '' NOT NULL,
        PRIMARY KEY (article_id)
    ) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta( $sql );
}
register_activation_hook(__FILE__, 'create_custom_articles_table');