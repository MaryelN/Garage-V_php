<?php 
require_once("libraries/config.php");
require_once("libraries/pdo.php");
//Recuperer le nom du script de page 
$currentPage = basename($_SERVER['SCRIPT_NAME']);
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title>Garage V. Parrot</title>
    </head>
    <body>
    <header>
    <nav id="mainNav" class="navbar navbar-expand-md sticky-top py-3">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><img src="<?=_SERVICE_IMG_PATH_?>Logo.png" alt="Logo"></span></a><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div id="navcol-1" class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                <?php foreach ($mainMenu as $key => $menu) { ?>
                    <li><a <?php if ($key === 'services.php') { ?>href="#services"<?php } else { ?> href=" <?=$key ;?>"<?php } ?> class="nav-link px-2 <?php if ($currentPage === $key) { echo 'active'; } ?>">
                    <?=$menu;?></a></li>
                    <?php } ?>
                </ul>
                <a class="btn btn-primary shadow" role="button" href="#">Login</a>
            </div>
        </div>
    </nav>
    </header>

    <main>