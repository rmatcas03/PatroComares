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
        <h1>Aprende a defenderte</h1>
      </div>
      
      <div>

        
        <div class="card-group mb-5">
            <div class="card">
              
              <div class="card-body">
                <p class="card-text text-center"> La importancia de la defensa personal </p>
                <img class="card-img-top" src="assets\img\imgActividades\defensa1.jpg" alt="Card image cap">
                <p class="card-text">                  
                A través de la defensa personal aprenderás a desarrollar tus habilidades, tanto físicas como mentales, para aplicarlas debidamente ante situaciones de peligro y evitar así entrar en episodios de pánico y bloquearte. Con ellas mejorarás tu estado de forma física, lucharás contra el estrés y podrás potenciar tu instinto, detectando mejor según qué situaciones.

                También hay clases de defensa personal femenina que te permitirán mejorar la confianza en ti misma en el día a día. Sabrás aplicar las técnicas de defensa personal femenina que puedan ser en cada momento más acertadas.
                </p>
                
              </div>

              <div class="container-fluid text-center">
                <a href="insertarActividad.php" class="btn btn-secondary">Inscribirse</a>
              </div>

            </div>

            <div class="card">
              
              <div class="card-body">
                
              <p class="card-text">
              En PatroComares impartimos un excelente sistema de defensa personal, especialmente orientado a técnicas de fácil ejecución, donde podrás aprender a defenderte ante un ataque de forma eficaz y contundente.

              Es cada vez más importante saber interpretar las distintas situaciones en las que nos podemos encontrar en peligro, ya sean físicas o verbales, en la calle o en el hogar. Tu reto será desarrollar habilidades mentalespara poder aplicarlas de manera racional y salir airoso en situaciones de peligro evitando el pánico.

              Gracias a las clases de defensa personal lograrás mejorar tu forma física, combatiendo el estrés y aprendiendo a potenciar tu instinto de defensa, así como tu nivel de tolerancia y control.
              </p>

                <div id="video-container">
                  <video id="video" width="640" height="365">
                    <source src="assets/videos/defensa.mp4" type="video/mp4">
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