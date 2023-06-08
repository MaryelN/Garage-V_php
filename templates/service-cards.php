
<?php require_once("libraries/config.php"); ?>

<!--Service Cards formula-->
<div class="col">
    <div class="card mb-4 rounded-3 shadow-sm" style="width: 18rem;">
    <!-- Pour utiliser la constante avec notre boucle foreach -->
      <img src="<?=_ICON_PATH_.$service['icon']?>.svg" class="card-img-top" alt="icon <?=$service['icon']?>">
      <div class="card-body">
        <h5 class="card-title"><?=$service['title']?></h5>
      </div>
    </div>
  </div>