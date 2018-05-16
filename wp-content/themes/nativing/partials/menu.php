<!--<script>-->
<!---->
<!--    $( document ).ready(function() {-->
<!--        $( "a:contains('Connexion')" ).addClass( "connect" );-->
<!--    });-->
<!--</script>-->
<div class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
<!--            <a class="navbar-brand scrollTo" href="http://vps481450.ovh.net/"><img src="--><?php //echo get_site_url(); ?><!--/wp-content/uploads/2018/03/wevaup-logo.png" id="logo" class="img-responsive" alt="Responsive image"></a>-->
        </div>

        <div class="navbar-collapse collapse" id="navigation">
            <?php
            wp_nav_menu( array(
                    'menu' => 'top_menu',
                    'depth' => 2,
                    'container' => 'div',
                    'menu_class' => 'nav navbar-nav navbar-right',
                    'fallback_cb' => 'wp_page_menu',
                    //Process nav menu using our custom nav walker
                    'walker' => new wp_bootstrap_navwalker()
                )
            );

            ?>
        </div>
    </div>
</div>