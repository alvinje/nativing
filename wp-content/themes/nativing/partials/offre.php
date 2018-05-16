<section id="application" class="med-padding">
    <div class="container">
            <h1><?php the_field('titre_page') ?></h1>
    </div>
    <div id="mockup" class="container med-padding">

        <?php if( have_rows('mockup_application') ): ?>

                <?php while( have_rows('mockup_application') ): the_row();

                    $image = get_sub_field('mockup');
                    $content = get_sub_field('baseline');

                    ?>
                <div class="col-md-4 mockup">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="img-responsive""/>
                    <p><?php echo $content; ?></p>
                </div>

                <?php endwhile; ?>

        <?php endif; ?>
    </div>
</section>


<section id="telechargement">
    <div class="container">
            <h2><?php the_field('telecharger_titre') ?></h2>

        <div class="col-xs-6 col-md-6">
            <?php

            $image = get_field('logo_android');

            if( !empty($image) ): ?>

                <img style="float: right;" class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>
        </div>
        <div class="col-xs-6 col-md-6">
            <?php

            $image = get_field('logo_android');

            if( !empty($image) ): ?>

                <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>
        </div>
    </div>
</section>


<section id="backoffice" class="med-padding">
    <div class="container">
            <h2><?php the_field('titre_manager') ?></h2>
        </div>
        <?php

        $image = get_field('image_manager');

        if( !empty($image) ): ?>

            <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
    </div>
</section>

<section id="panel" class="big-padding">
    <div class="container">
        <?php if( have_rows('offres') ): ?>


                <?php while( have_rows('offres') ): the_row();

                    $image = get_sub_field('image');
                    $title = get_sub_field ('titre');
                    $content = get_sub_field('texte');
                    $link = get_sub_field('lien_souscrire');

                    ?>

                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="img-responsive img-circle" />
                                <h3> <?php echo $title; ?></h3>
                                <p><?php echo $content; ?></p>
                                <?php
                                if( $link ): ?>
                                    <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?><i class="fas fa-plus-circle"></i></a>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>

        <?php endif; ?>

    </div>
</section>

<script>
    $( "div .mockup:nth-child(2)").addClass( "mockup-center" );
</script>