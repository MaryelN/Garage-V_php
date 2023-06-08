<?php require_once('libraries/config.php'); ?>

</main>  
  
  <div class="container">
    <footer class="py-5">
      <div class="row">
        <div class="col-6 col-md-2 mb-3">
        <img src="<?=_ICON_PATH_?>map.svg" alt="icon map">
            <p>28 Rue du Mail, 69004 Lyon</p>
        </div>

        <div class="col-6 col-md-2 mb-3">
        <img src="<?=_ICON_PATH_?>tel.svg" alt="icon tel">
            <p>Téléphone fixe: 04 70 29 53 14</p>
        </div>

        <div class="col-6 col-md-5 mb-3">
        <img src="<?=_ICON_PATH_?>hour.svg" alt="icon hours">
        <p>Horaires:</p>
        <?php foreach($openHours as $key => $hours) {
            include('templates/open-hours.php');
          }?>
        </div>

        <div class="d-flex flex-row">
          <a class="nav-link mx-3" href="#">Accueil</a>
          <a class="nav-link mx-3" href="#">Services</a>
          <a class="nav-link mx-3" href="#">Vente de Voitures</a>
          <button class="btn btn-primary" type="button">CONTACTER</button>
        </div>
      </div>

      <div class="d-flex flex-column flex-sm-row justify-content-center py-4 my-4 border-top">
        <p>Garage V. Parrot©. All rights reserved.</p>
        <div class="d-flex">
          <img class="ms-3" href="<?=_ICON_PATH_?>facebook.svg"><a href="#"></a></img>
          <img class="ms-3" href="<?=_ICON_PATH_?>instagram.svg"><a href="#"></a></img>
          <img class="ms-3" href="<?=_ICON_PATH_?>twitter.svg"><a href="#"></a></img>
        </div>
      </div>
    </footer>
  </div> 

    </footer>
