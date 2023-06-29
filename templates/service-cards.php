
<?php require_once("libraries/config.php"); ?>

<!--Service Cards formula-->
<div class="col">
    <div class="card mb-4 rounded-3 shadow-sm" style="width: 18rem;">
      <div class="card-body">
        <!-- Pour utiliser la constante avec notre boucle foreach -->
        <img style="width: 2.5rem;" src="<?=_ICON_PATH_.$service['icon']?>.svg" class="card-img-top" alt="icon <?=$service['icon']?>">
        <h5 class="card-title"><?=$service['title']?></h5>
        </div>
      </div>
    </div>
  