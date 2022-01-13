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

<div class=" container-fluid text-center"> <!--container que pone los botones de las cartas en el centro-->

      <div class="container-fluid d-flex justify-content-center row mt-3 "> <!--Te pone las tres cartas centradas d-flex justify-content-center-->
        <div class="card col-lg-6 border-0 polaroid">
          <h2 class="text-center">Fútbol</h2>
          <img class="card-img-top " src="assets\img\imgTrabajo\futbol.jpg" alt="Card image" style="width:100%">
          <span class="textoPolaroid">Disponible desde Benjamines a Seniors</span>
          <span class="textoPolaroid">Implementación de nuevas tecnologías de trabajo</span>
          <div class="card-body">
            <h4 class="card-title">Lucena fc</h4>
            <a href="noticiasFutbol.php" class="btn btn-secondary">Más información</a>
          </div>
        </div>

        <div class="card col-lg-6 border-0 polaroid">
          <h2 class="text-center">Natación</h2>
          <img class="card-img-top" src="assets\img\imgTrabajo\natacion1.jpg" alt="Card image" style="width:100%">
          <span class="textoPolaroid">Disponible para todas las edades</span>
          <div class="card-body">
            <h4 class="card-title">Comienza el plazo de inscripción</h4>
          
            <a href="noticiasNatacion.php" class="btn btn-secondary">Más información</a>
          </div>
        </div>
      </div>
      <div class="container-fluid d-flex justify-content-center row mt-3 ">
      <div class="card col-lg-6 border-0 polaroid  ">
          <h2 class="text-center">Defensa personal</h2>
          <img class="card-img-top" src="assets\img\imgTrabajo\defensapersonalhd.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
          <h4 class="card-title">Clases de defensa personal</h4>
            <p class="card-text">Comienzan el plazo de inscripción</p>
            <p class="card-text">Para todas las edades</p>
            <a href="noticiasdefensa.php" class="btn btn-secondary">Más información</a>
          </div>
        </div>
        <div class="card col-lg-6 border-0 polaroid">
          <h2 class="text-center">Pádel</h2>
          <img class="card-img-top" src="assets\img\imgTrabajo\padel.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
          <h4 class="card-title">Torneo X</h4>
            <p class="card-text">Ganador del Torneo X Navidad pádel</p>
            <a href="noticiasPadel.php" class="btn btn-secondary">Más información</a>
          </div>
        </div>
      </div>

      <div class="container-fluid row my-5 d-flex justify-content-center">

      
        <div class="card col-lg-6 border-0 polaroid">
          <h2 class="text-center">Atletismo</h2>
          <img class="card-img-top" src="assets\img\imgTrabajo\atletismo01.jpg" alt="Card image" style="width:100%">
          <span class="textoPolaroid">Categorías inferiores hasta seniors</span>
          <div class="card-body">
            <h4 class="card-title">Club de atletismo Amo allá!</h4>
            <p class="card-text">Comienza el plazo de inscripción a nuestras clases</p>
            <a href="noticiasAtletismo.php" class="btn btn-secondary">Más información</a>
          </div>
        </div>

        <div class="card col-lg-6 border-0 polaroid">
          <h2 class="text-center">Tenis</h2>
          <img class="card-img-top" src="assets\img\imgTrabajo\tenis.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Nuevas clases de tenis </h4>
            <p class="card-text">Próximamente en nuestras instalaciones</p>
            <a href="noticiasTenis.php" class="btn btn-secondary">Más información</a>
          </div>
        </div>
      </div>

      </div>
    </section>

  </main>
  <?php include("includes/footer.php"); ?>
</body>

</html>