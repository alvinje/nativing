<secion id="tunnel-option" class="big-padding">
    <h1>Choisissez vos options</h1>
    <p class="btn-1"><a href="<?php echo the_permalink(726) ?>">Offre sans option</a></p>
    <div class="container">

      <div class="row">
          <div class="col-xs-6 col-md-4 col-md-offset-2">
              <h3>Options supplémentaires</h3>
              <form method="post" action="<?php echo the_permalink(726) ?>">

                  <div class="checkbox">
                      <label>
                          <input name="option[]" value="option1" type="checkbox"> Option 1
                      </label>
                  </div>
                  <div class="checkbox">
                      <label>
                          <input name="option[]" value="option2" type="checkbox"> Option 2
                      </label>
                  </div>
                  <div class="checkbox">
                      <label>
                          <input name="option[]" value="option3" type="checkbox"> Option 3
                      </label>
                  </div>
                  <div class="checkbox">
                      <label>
                          <input name="option[]" value="option4" type="checkbox"> Option 4
                      </label>
                  </div>

          </div>
          <div class=" col-xs-6 col-md-4 col-md-offset-2">
              <h3>Tarifs</h3>
              <p>200€ TTC</p>
              <p>50€ TTC</p>
              <p>350€ TTC</p>
              <p>1200€ TTC</p>
          </div>
      </div>
        <div class="row">
            <input id="rdv" type="submit" name="submit" value="Demander un rendez vous"/>
            </form>
        </div>
    </div>
</secion>


