<?php

global $wpdb;

$resul_post = $wpdb->get_row("SELECT * FROM wp_posts WHERE ID = 1");
$result_articles = $wpdb->get_row("SELECT * FROM wp_posts WHERE ID = 1");
$link = "https://www.radionacional.co/cultura/ferias-y-fiestas/fiestas-de-san-pacho-2025-en-quibdo-programacion";
// $img_link = "https://instagram.feoh2-1.fna.fbcdn.net/v/t51.2885-15/552448553_18532853329043228_8547431944946255431_n.jpg?stp=dst-jpg_e35_tt6&efg=eyJ2ZW5jb2RlX3RhZyI6IkNBUk9VU0VMX0lURU0uaW1hZ2VfdXJsZ2VuLjE0NDB4MTc5NS5zZHIuZjgyNzg3LmRlZmF1bHRfaW1hZ2UuYzIifQ&_nc_ht=instagram.feoh2-1.fna.fbcdn.net&_nc_cat=108&_nc_oc=Q6cZ2QEHMP3lcUfxtIFn7do0uocyJ-wsf9COWSKJfyuRUrAhWM9EwwRjFoXTlszIT4KRr14&_nc_ohc=rNhp1l_UWaQQ7kNvwHldKsc&_nc_gid=i94Z6HCg-ymiBDY7ee5G2w&edm=AP4sbd4BAAAA&ccb=7-5&ig_cache_key=MzcyNjY3MTgyMjA1NTEyNjc5MA%3D%3D.3-ccb7-5&oh=00_Afao64AzwUcPvA0X_a-fKs0bZ72DIfndc5m0lHHaidSgYg&oe=68D786A6&_nc_sid=7a9f4b";
// $img_link = "https://neliosoftware.com/es/wp-content/uploads/sites/3/2018/07/aziz-acharki-549137-unsplash-1200x775.jpg";


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
    <div id="carouselExampleIndicators" class="carousel slide my-4" data-bs-ride="carousel" style="background-color: blue;">

        <p>

        </p>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <h2>Artículos</h2>
        </div>
        <div class="container-md">
            <h1>
                Entradas
            </h1>
            <?php
            
            
            echo $resul_post->post_title;
            ?>
        </div>
        <div class="container-md">
            <?php
            $resul_post = $wpdb->get_row("SELECT * FROM wp_articles WHERE article_id = 1");

            ?>
            <h1>
                Articulos
            </h1>

            <h1>
                <?php
                
                echo $result_articles->article_title;
                ?>
            </h1>
            <p>
                <?php
                echo $result_articles->article_description;
                ?>
            </p>
            <a class="btn btn-primary" href=<?php echo $result_articles->article_source_link; ?>>
                Leer más
            </a>


        </div>
    </div>
</div>

<?php
// Incluye el archivo de pie de página del tema de WordPress (footer.php).
get_footer();
?>