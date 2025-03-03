<?php get_header(); ?>
<main>
    <h1><?php the_title(); ?></h1>
    <p>Publicado el <?php the_date(); ?> por <?php the_author(); ?></p>
    <div><?php the_content(); ?></div>
</main>
<?php get_footer(); ?>
