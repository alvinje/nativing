<section id="blog" class="big-padding">
    <div class="container">
            <h1>Actualité Weavup</h1>
    </div>
        <div class="container med-padding">

                <?php
                $myposts = get_posts('');
                foreach($myposts as $post) :
                    setup_postdata($post);
                    ?>
                    <div class="row med-padding align-item block-article">

                         <div class="col-md-4">
                             <?php
                             if ( has_post_thumbnail() ) :?>
                                 <img class="img-responsive img-center" src="<?php echo the_post_thumbnail_url('large') ?>" alt="Image - <?php the_title(); ?>" />
                             <?php endif; ?>
                         </div>

                        <div class="col-md-8">
                            <h2><?php the_title(); ?></h2>
                            <p>Posté le <?php echo $date ?> <span style="color:#ff6630"> <?php the_time('l j F Y'); ?></span></p>
                            <?php the_excerpt(); ?><br>

                            <p><a href="<?php the_permalink(); ?>">Lire la suite</a></p>

                        </div>

                    </div>

                <?php endforeach; wp_reset_postdata(); ?>

        </div>

</section>

<section class="with-padding">
    <div class="container">
        <div class="col-md-12 text-center">
            <?php numeric_posts_nav(); ?>
        </div>
    </div>
</section>



