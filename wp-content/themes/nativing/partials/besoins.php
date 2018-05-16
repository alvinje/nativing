<section id="fidele" class="med-padding">
    <div class="container">

        <h1><?php the_field('titre_page') ?></h1>


        <div class="row align-item">
            <div class="col-md-6">
                <?php

                $image = get_field('image_communaute');

                if( !empty($image) ): ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />

                <?php endif; ?>
            </div>
            <div class="col-md-6">
             <p><?php the_field('texte_communaute') ?></p>
            </div>
        </div>
    </div>
</section>

<section id="chiffre" class="big-padding">
    <div class="container">
        <?php if(get_field('chiffres')): ?>

                <?php while(has_sub_field('chiffres')): ?>

                <div class="col-md-4">

                    <h2> <span class="counter" data-count="<?php the_sub_field('chiffre'); ?>">0</span></h2>
                    <p><?php the_sub_field('baseline'); ?></p>
                </div>

                <?php endwhile; ?>

        <?php endif; ?>
    </div>
</section>


<section id="solution-besoin" class="med-padding">
    <div class="container align-item">
            <div class="col-sm-6">
                <h2><?php the_field('titre_solution') ?></h2>
                <p><?php the_field('texte_solution') ?></p>
            </div>
            <div class="col-sm-6">
                <?php

                $image = get_field('image_solution');

                if( !empty($image) ): ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive"/>

                <?php endif; ?>
            </div>
        </div>
        <div class="container med-padding justify-content">
            <?php

            $link = get_field('bouton_solution');

            if( $link ): ?>

                <a data-aos="fade-up"
                   data-aos-duration="2000" class="btn-weavup"  href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>

            <?php endif; ?>
        </div>
</section>

<script>


    $( document ).ready(function() {
        $(document).scroll(function() {
            var hexagon = $('.counter').position().top;
            if($(window).scrollTop() > hexagon-innerHeight) {
                counter()
            };
        });

        function counter() {
            $('.counter').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');

                $({ countNum: $this.text()}).animate({
                        countNum: countTo
                    },

                    {

                        duration: 2000,
                        easing:'linear',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                            //alert('finished');
                        }

                    });



            });
        }


    });

</script>