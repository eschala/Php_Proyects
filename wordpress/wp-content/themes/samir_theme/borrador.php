 <?php
            // Comienza el bucle para mostrar los posts.
            // have_posts() verifica si hay posts disponibles.
            if (have_posts()) :
                //recorre cada post.
                while (have_posts()) : the_post();
            ?>
                    <div class="card m-4">
                        <div class="card-body">
                            <h3 class="card-title"><?php the_title(); ?></h3>
                            <p class="card-text"> <?php the_date();?> </p>
                            <p class="card-text"> <?php the_content();?> </p>
                            

                            
                        </div>
                    </div>
            <?php
                endwhile;
            else :
                // Si no hay posts, muestra un mensaje.
                echo '<p>No se encontraron posts.</p>';
            endif;
            ?>