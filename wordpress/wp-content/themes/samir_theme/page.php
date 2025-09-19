<?php get_header(); ?>



<?php while (have_posts()): the_post(); ?>


<h1>
    <?= the_title(); ?>
</h1>
    <h3>
        <?= "dentro del bucle while "; ?>
    </h3>
    <h3>
        <?= "fuera del bucle while"; ?>
    </h3>
    <p>
        <?= the_content(); ?>
    </p>

<?php endwhile; ?>

<?php get_footer(); ?>