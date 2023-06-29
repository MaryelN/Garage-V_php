<?php require_once("libraries/config.php"); ?>
<?php require_once("templates/header.php"); ?>

<!--Hero-->

<section class="">
      <div class="container pt-4 pt-xl-5" style="height: 580px;">
          <div class="row g-0 pt-5" style="margin-bottom: 0px;padding-bottom: 0px;padding-top: 24px;margin-top: 37px;margin-left: -38px;padding-left: 0px;padding-right: 0px;margin-right: 122px;">
              <div class="col-md-8 col-xl-6 text-center text-md-start mx-auto" style="padding-left: 0px;margin-left: -39px;padding-right: 0px;">
                  <div class="text-center">
                      <h1 class="fw-bold" style="text-align: left;padding: 0px;margin: 0px;margin-right: 10px;padding-left: 18px;margin-left: 15px;">A la recherche du bon service de réparation mécanique ?<br /><br /></h1><button class="btn btn-primary" type="button" style="padding-top: 10px;margin-bottom: 46px;margin-top: 42px;margin-left: 20px;margin-right: 20px;">CONTACTER</button>
                  </div>
              </div>
          </div>
      </div>
  </section>

<!--Service Cards -->
  <section class="service_cards container-fluid">
    <div class="container text-center">
      <div class="row">
        <?php foreach($serviceCards as $key => $service) {
          include('templates/service-cards.php');
        } ?>
      </div>
    </div>
  </div>
</section>

    <?php require_once("templates/footer.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>