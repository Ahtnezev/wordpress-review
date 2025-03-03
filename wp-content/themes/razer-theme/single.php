<?php get_header(); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <?php 
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?>
                    <article class="post">
                        <h1 class="mb-4 title"><?php the_title(); ?></h1>
                        <!-- <p class="meta">
                            Publicado el <?php the_date(); ?> por <?php the_author(); ?>
                        </p> -->
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                    <?php
                }
            }
            ?>
        </div>

        <!-- <div class="col-lg-4">
            get_sidebar();
        </div> -->
    </div>
</div>

<?php get_footer(); ?>
