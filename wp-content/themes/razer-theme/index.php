<?php get_header(); ?>

<main class="h100">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
        </article>
    <?php endwhile; else: ?>
        <p>No hay contenido disponible.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
