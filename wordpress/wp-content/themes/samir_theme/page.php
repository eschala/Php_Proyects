<?php

global $wpdb;

//https://developer.wordpress.org/reference/classes/wpdb/#select-a-row

$resul_post = $wpdb->get_row("SELECT * FROM wp_posts WHERE ID = 1");
$result_articles = $wpdb->get_row("SELECT * FROM wp_articles WHERE article_id = 1");
$link = "https://www.radionacional.co/cultura/ferias-y-fiestas/fiestas-de-san-pacho-2025-en-quibdo-programacion";

// Incluye el archivo de cabecera del tema de WordPress (header.php).
get_header();

?>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Bienvenidos a la Landing Page de las Fiestas Patronales de San Francisco 🎉</h1>
            <p class="lead">Enterate de lo que se vive en SAN PACHO</p>

        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-12">
            <h1>Articulos</h1>
        </div>
        <div class="container-md">

        </div>
        <div class="container-md">

            <h1>
                <?php

                echo $result_articles->article_title;
                ?>
            </h1>
            <img
                src=<?= $result_articles->article_img_url ?>
                alt=<?= $result_articles->article_img_url ?>
                style="max-width: 600px; height: auto;">
            <p>
                <?php
                echo $result_articles->article_description;

                ?>

            </p>
            <a class="btn btn-primary" 
            href=<?php echo $result_articles->article_source_link; ?>>
                Leer más
            </a>

        </div>
    </div>
</div>

<?php
// Incluye el archivo de pie de página del tema de WordPress (footer.php).
get_footer();
?>