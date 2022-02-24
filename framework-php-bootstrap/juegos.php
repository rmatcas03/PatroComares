<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

  <?php include("includes/navigation.php"); ?>

  <main>

    <section class="page-section" id="noticias">
      <div class="text-center mt-5">
        <h1>Juegos</h1>


        <div class=" container-fluid text-center">
          <!--container que pone los botones de las cartas en el centro-->

          <div class="container-fluid d-flex justify-content-center row mt-3 ">
            <div class="card col-lg-6 border-0 polaroid">
              <h2 class="text-center">¿Recuerdas las parejas?</h2>
              <img class="card-img-top" src="assets\img\imgJuegos\juegoPenaltis.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <p class="card-text">¿Serás capaz de marcar al mejor portero de todos los tiempos? ¡Prueba suerte en Penaltis Shoot!</p>
                <a href="juegos\JuegoJesus\juego_penaltis\juego.html" class="btn btn-secondary">Jugar</a>
              </div>
            </div>
            <div class="card col-lg-6 border-0 polaroid">
              <h2 class="text-center">Messi Invaders</h2>
              <img class="card-img-top" src="assets\img\imgJuegos\juegoMessiInvaders.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <p class="card-text">Messi no para de lanzar sus Balones de Oro a Cristiano Ronaldo. ¡Intenta esquivarlos disparando balones!</p>
                <a href="juegos\JuegoDavid\Messi Invaders\src\videojuego-javascript.html" class="btn btn-secondary">Jugar</a>
              </div>
            </div>
          </div>
          <div class="container-fluid d-flex justify-content-center row mt-3 ">
            <div class="card col-lg-6 border-0 polaroid">
              <h2 class="text-center">¿Recuerdas las parejas?</h2>
              <img class="card-img-top" src="assets\img\imgJuegos\juegoParejas.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <p class="card-text">¿Serás capaz de recordar las parejas de nuestros deportes favoritos?</p>
                <a href="juegos\JuegoRuben\juego.html" class="btn btn-secondary">Jugar</a>
              </div>
            </div>
            <div class="card col-lg-6 border-0 polaroid">
              <h2 class="text-center">Bola Loca</h2>
              <img class="card-img-top" src="assets\img\imgJuegos\juegoBolaLoca.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <p class="card-text">¡Consigue atrapar la Bola Loca!</p>
                <a href="juegos\JuegoJoseLuis\juego.html" class="btn btn-secondary">Jugar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><br><br>

  </main>
  <?php include("includes/footer.php"); ?>
</body>

</html>