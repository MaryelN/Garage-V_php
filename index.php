<?php require_once("libraries/config.php"); ?>
<?php require_once("templates/header.php"); ?>

<!--Hero-->

  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">A la recherche du bon service de réparation mécanique ?</h1>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">CONTACTER</button>
      </div>
    </div>
  </div>

<!--Service Cards -->
  <section id="service_cards" class="service_cards">
    <div class="row" >
      <?php foreach($serviceCards as $key => $service) {
        include('templates/service-cards.php');
      } ?>
  </div>
</section>

    <?php require_once("templates/footer.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>