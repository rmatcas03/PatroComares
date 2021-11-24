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
        <h1>Formación de nuestra académia</h1>
      </div>
      <div class=" container-fluid text-center">
      <div class="container-fluid row mt-3">

        <div class="card col-lg-6 border-0 polaroid">
          <h2 class="text-center">Tenis</h2>
          <img class="card-img-top" src="assets\img\imgTrabajo\tenis.jpg" alt="Card image" style="width:100%">
          <span class="textoPolaroid">Categorías inferiores</span>
          <div class="card-body">
            <h4 class="card-title">Clases de tenis</h4>
            <p class="card-text">Comienzan las clases de tenis con el ilustre profesor Rafael Nadal a las 10:00 A.M en nuestro polideportivo municipal </p>
            <a href="noticiasDestacadas.php" class="btn btn-secondary">Volver</a>
          </div>
        </div>
        <div class="container col-lg-6 my-5">

        Se disputa entre dos jugadores (individuales) o entre dos parejas (dobles). 
        El objetivo del juego es lanzar una pelota golpeándola con la raqueta de modo que rebote en la otra cancha pasando la red dentro de los límites permitidos del campo del rival, 
        procurando que este no pueda devolverla para conseguir un segundo rebote en el suelo y por ende un punto
        </div>

      </div>


    </section>

  </main>
  <?php include("includes/footer.php"); ?>
</body>

</html>