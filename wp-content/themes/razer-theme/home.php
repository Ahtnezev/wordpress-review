<?php
/*
Template Name: Publicaciones Personalizadas
*/
?>

<?php get_header(); ?>

<div class="container h100 mt-4">
    <h1 class="mb-4">Publicaciones Personalizadas</h1>
    <div class="row">
        <?php
        $query = new WP_Query(array(
            'post_type'      => 'post',
            'posts_per_page' => 6,
        ));

        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
        ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                        </a>
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); else : ?>
            <p>No hay publicaciones disponibles.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
