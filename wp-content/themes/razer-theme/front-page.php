<?php get_header() ?>

<?php
$slides = new WP_Query(array(
    'post_type'      => 'slides',
    'posts_per_page' => -1, // Muestra todos los slides
));

if ($slides->have_posts()) : ?>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php $active = true; ?>
            <?php while ($slides->have_posts()) : $slides->the_post(); ?>
                <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="d-block w-100" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php the_title(); ?></h5>
                    </div>
                </div>
                <?php $active = false; ?>
            <?php endwhile; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

<?php endif; wp_reset_postdata(); ?>


<!-- <?php get_template_part('template-parts/carrusel'); ?> -->


<div class="content">
    <h1>front page</h1>
</div>

<?php get_footer() ?>

