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
      <div class="text-center mt-3">
        <h1> Natacion en PatroComares</h1>
      </div>
      
      <div>

        
        <div class="card-group mb-5">
            <div class="card">
              
              <div class="card-body">
                <p class="card-text text-center"> Equipo profesional de natacion </p>
                <img class="card-img-top" src="assets\img\imgActividades\natacion1.jpg" alt="Card image cap">
                <p class="card-text">
                La natación es el movimiento o desplazamiento a través del agua mediante el uso de las extremidades corporales y sin utilizar ningún instrumento artificial. La natación se trata de un deporte además de recreativo muy beneficioso para el ser humano, ya que al ser principalmente un ejercicio aeróbico, la natación reduce los efectos dañinos del estrés, puede mejorar y corregir la postura y desarrollar un físico característico, a menudo llamada "silueta de nadador".

                La natación ya era practicada en tiempos prehistóricos. En la edad moderna formó parte de los primeros Juegos Olímpicos modernos en 1896 en Atenas y en 1908, se creo la Federación Internacional de Natación (FINA).
                </p>
                
              </div>

              <div class="container-fluid text-center">
                <a href="insertarActividad.php?actividad=natacion&id_actividad=2" class="btn btn-secondary">Inscribirse</a>
              </div>

            </div>

            <div class="card">
              
              <div class="card-body">
                
              <p class="card-text"> ¿Cuales son los objetivos de la natacion? </p>

              <p class="card-text">

              La natación es un deporte que tiene en cuenta otros requerimientos especiales de las personas como ninguna otra disciplina lo hace. Tal es el caso de asmáticos, epilépticos, mujeres embarazadas y todos aquellos que sufran cualquier clase de mengua física o mental, que se ven favorecidos con esta habilidad.

              Uno de los objetivos de la natación es el planteamiento utilitario. Éste es el que abarcará las necesidades básicas del ser humano, como por ejemplo el preservar la vida.
              
               </p>
                
                <div id="video-container">
                  <video id="video" width="640" height="365">
                    <source src="assets/videos/natacion.mp4" type="video/mp4">
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