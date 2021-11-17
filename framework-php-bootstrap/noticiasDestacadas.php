<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
  <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

  <?php include("includes/navigation.php"); ?>

  <main>

    <section class="page-section" id="noticias">
      <div class="text-center mt-5">
        <h1>Noticias destacadas</h1>
      </div>
      <div class="container-fluid row mt-3">

        <div class="card col-4">
          <h2 class="text-center">Fútbol base</h2>
          <img class="card-img-top" src="imgTrabajo\fb01.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Lucena fc</h4>
            <p class="card-text">Comienzan las clases de fútbol en nuestra academia municipal</p>
            <a href="#" class="$secondary">Más información</a>
          </div>
        </div>

        <div class="card col-4">
          <h2 class="text-center">Baloncesto</h2>
          <img class="card-img-top" src="imgTrabajo\fb01.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Lucena fc</h4>
            <p class="card-text">Comienzan las clases de fútbol en nuestra academia municipal</p>
            <a href="#" class="$primary">Más información</a>
          </div>
        </div>

        <div class="card col-4">
          <h2 class="text-center">Pádel</h2>
          <img class="card-img-top" src="imgTrabajo\fb01.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Lucena fc</h4>
            <p class="card-text">Comienzan las clases de fútbol en nuestra academia municipal</p>
            <a href="#" class="$primary">Más información</a>
          </div>
        </div>
      </div>
    </section>

  </main>
  <?php include("includes/footer.php"); ?>
</body>

</html>