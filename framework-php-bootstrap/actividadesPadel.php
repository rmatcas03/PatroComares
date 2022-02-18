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
      <div class="text-center mt-3">
        <h1>Nuevo grupo de padel profesional</h1>
      </div>
      
      <div>

        
        <div class="card-group mb-5">
            <div class="card">
              
              <div class="card-body">
                <p class="card-text text-center"> Padel para todos </p>
                <img class="card-img-top" src="assets\img\imgActividades\padel1.jpg" alt="Card image cap">
                <p class="card-text">
                El pádel como deporte surgió desde 1990 y desde su nacimiento tuvo gran aceptación por parte de un buen numero de practicantes, lo que lo ha hecho muy practicado y de un rápido desarrollo.

                Se describe como un deporte de raqueta o pala en el que oficialmente siempre se juega por parejas (aunque podamos encontrar pistas de padel individual) en el que un equipo coopera entre sí para enfrentarse ante otra pareja.

                Por lo que se trata de un deporte de cooperacíon – oposición con espacios divididos por una red.
                </p>
                
              </div>
            </div>

            <div class="card">
              
              <div class="card-body">
                
              <p class="card-text"> Reglamento sobre campo y puntuacion</p>
              <p class="card-text">
              El campo de juego, como componente del pádel, posee una forma rectangular y posee 20 metros de largo pro 10 de ancho y se encuentra dividido por una red en la mitad del campo. El campo estará cerrado totalmente, con fondos de 4 metros de los cuales los 3 primeros deben permitir el rebote, al estar hechos de muro y el ultimo metro de malla, en el cual la pelota no rebotara, ademas los laterales estarán hecho por zonas escalonadas.
              En lo que se refiere a la puntuación que se brinda a los jugadores de pádel y con la cual se puede ganar el juego, se maneja un formato similar al del tenis, así por puntos se dará de 15-30-40 y con uno mas se ganara un juego, hasta sumar 6 y hacerse a un set, siempre y cuando se tenga una ventaja de 2 juego respecto al rival o se jugará el tie break en el 6-6. 
              Los partidos oficiales son siempre al mejor de 3 sets (aunque en el world padel tour hubo una época en la que las finales se estuvieron jugando al mejor de 5 sets)
              </p>
                
                <div id="video-container">
                  <video id="video" width="640" height="365">
                    <source src="assets/videos/padel.mp4" type="video/mp4">
                    <source src="assets/videos/mikethefrog.ogv" type="video/ogv">
                    <source src="assets/videos/mikethefrog.mp4" type="video/mp4">
                    <p>
                      Your browser doesn't support HTML5 video.
                      <a href="assets/videos/mikethefrog.mp4">Download</a> the video instead.
                    </p>
                  </video>
                  <div id="video-controls">
                    <button type="button" id="play-pause" class="play"> <i class="fas fa-play"></i> </button>
                    <progress id="seek-bar" value="0" max="100"></progress>
                    <button type="button" id="mute"> <i class="fas fa-volume-mute"></i> </button>
                    <input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1">
                    <button type="button" id="full-screen"> <i class="fas fa-compress"></i> </button>
                  </div>
                </div>

                <script src="js/video.js"></script>

              </div>
            </div>
            
          </div>

    </div>
    </section>

  </main>
  <?php include("includes/footer.php"); ?>
</body>

</html>