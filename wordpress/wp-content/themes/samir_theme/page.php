<?php 
// Incluye el archivo de cabecera del tema de WordPress (header.php).

$link="https://www.radionacional.co/cultura/ferias-y-fiestas/fiestas-de-san-pacho-2025-en-quibdo-programacion";
get_header(); 
?>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Bienvenidos a la Landing Page de las Fiestas Patronales de San Francisco 🎉</h1>
            <p class="lead">Enterate de lo que se vive en SAN PACHO</p>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide my-4" data-bs-ride="carousel">
        
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <h2>Artículos</h2>
        </div>
        <div class="container-md">
            <?php
            // Inicia el bucle de WordPress.
            // have_posts() verifica si hay posts para mostrar.
            if ( have_posts() ) : 
                // while (have_posts()) itera a través de cada post.
                // the_post() establece los datos de cada post para ser usados en las funciones.
                while ( have_posts() ) : the_post();
            ?>
                    <div class="card m-4">
                        <div class="card-body">
                            <h3 class="card-title"><?php the_title(); ?></h3>
                            <p class="card-text"><?php the_date(); ?></p>
                            <p class="card-text"><?php the_content(); ?></p>
                            <a href=<?php echo $link ?> class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
            <?php 
                endwhile;
            // Cierra la condicional 'if'.
            endif;
            ?>
        </div>
    </div>
</div>

<?php 
// Incluye el archivo de pie de página del tema de WordPress (footer.php).
get_footer(); 
?>