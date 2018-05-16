<?php get_header(); ?>
    <div class="page">
    <section id="top-banner">
        <div class="row">
            <img class="img-responsive" src="<?php echo get_template_directory_uri().'/img/bandeau.png'; ?>" alt="">
        </div>
        <div class="container">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="post">
                        <h1 class="post-title"><?php the_title(); ?></h1><br><br>
                        <p>Article du <span style="color:#ff6630"> <?php the_time('l j F Y'); ?></span></p>
                        <div class="post-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    </div>




<?php get_footer(); ?>