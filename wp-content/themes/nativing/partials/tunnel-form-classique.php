

<div id="tunnel-form" class="big-padding">
    <div class="container">
        <h1>Rencontrons-nous pour affiner vos besoins:</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fermentum justo nisl, at dignissim nisi convallis eget. Morbi non nibh ac massa laoreet dignissim quis id ante. Vestibulum fermentum purus at velit auctor, a gravida ipsum iaculis. Nulla facilisi. Pellentesque sit amet libero facilisis, cursus eros in, iaculis neque.</p>

        <h2>Vous avez choisi l'offre: <span>Classique</span></h2>
        <div style="text-align: center; padding: 20px 0px">
            <p class="result">Avec options: </p>
            <?php
            if(isset($_POST['submit'])){
                if(!empty($_POST['option'])){
                    foreach($_POST['option'] as $selected){
                        echo "<p class='result'><span>".$selected."</span></p>";
                    }
                }
            }
            ?>
        </div>

        <?php echo do_shortcode( '[contact-form-7 id="734" title="form rdv"]');?>


    </div>

</div>