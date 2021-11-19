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
        <h1>Noticias</h1>
      </div>
      <div class="container-fluid row mt-3">

        <div class="card col-lg-6 border-0">
          <h2 class="text-center">Pádel</h2>
          <img class="card-img-top" src="assets\img\imgTrabajo\padel.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Padel center</h4>
            <p class="card-text">Torneo de pádel en honor al antiguo alcalde de la localidad os esperamos</p>
            <a href="noticiasDestacadas.php" class="btn btn-secondary">Volver</a>
          </div>
        </div>
        <div class="container col-lg-6 my-5">
          A continuación os explicaremos como van a ser las distintas categorías del torneo: <br><br>
          Los niveles 1 – 1.5 : serían Iniciación.<br>
          Los niveles 2 – 2.5 : serían Intermedio.<br>
          Los niveles 3 – 3.5 : serían Intermedio Alto.<br>
          Los niveles 4 – 4.5 : serían Avanzado.<br>
          Los niveles 5 – 5.5 : serían Competición / Monitores.<br>
          Los niveles 6 – 7 : serían Profesional.<br>
        </div>

      </div>


    </section>

  </main>
  <?php include("includes/footer.php"); ?>
</body>

</html>