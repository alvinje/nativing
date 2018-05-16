<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">

        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

        <?php wp_head();?>

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>



    </head>
    <script type="text/javascript">
        $(function(){

            addNav();

            $(window).scroll(function() {
                addNav();
            });



            console.log($(document).scrollTop());

            function addNav() {
                if($(document).scrollTop() > 30) {
                    $('.navbar').addClass('fond');
                } else {
                    $('.navbar').removeClass('fond');
                }
            }



        });
    </script>


    <script>
        $( document ).ready(function() {
            AOS.init({
                disable: 'mobile'
            });
        });

    </script>
<body>

