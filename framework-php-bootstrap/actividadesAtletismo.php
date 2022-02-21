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
        <h1>Comienzan las pruebas de atletismo</h1>
      </div>
      
      <div>

        
        <div class="card-group mb-5">
            <div class="card">
              
              <div class="card-body">
                <p class="card-text text-center "> Atletismo femenino </p>
                <img class="card-img-top" src="assets\img\imgActividades\atletismo1.jpg" alt="Card image cap">
                <p class="card-text">
                El atletismo es considerado el deporte organizado más antiguo del mundo. Abarca numerosas disciplinas agrupadas en carreras, saltos, lanzamientos y pruebas variadas.

                El atletismo es el arte de superar a los adversarios en velocidad o en resistencia llamado también fondo, en distancia o en mayor altura. El número de pruebas y los tipos ya sean individuales o en grupos, ha variado con el paso del tiempo. El atletismo es uno de los pocos deportes, practicados a nivel mundial, ya sea entre aficionados o en competiciones de todos los niveles. La simplicidad y los pocos medios necesarios para su práctica explican este éxito.
                </p>
                
              </div>

              <div class="container-fluid text-center">
                <a href="insertarActividad.php?actividad=atletismo&id_actividad=5" class="btn btn-secondary">Inscribirse</a>
              </div>

            </div>

            <div class="card">
              
              <div class="card-body">
                
              <p class="card-text">
              La primera referencia histórica al atletismo se remonta al año 776 a. C. en Grecia, con una lista de los atletas ganadores de una competencia. Dentro del atletismo existen diversas modalidades de pruebas. Esto es algo muy complejo ya que debido al atletismo surgieron muchos deportes,por ejemplo: las carreras a pie (velocidad, media distancia, fondo, carreras con vallas, campo a través, relevos…), los saltos (de longitud, de altura, triple salto, salto con pértiga), los lanzamientos (peso, jabalina, martillo…), la marcha atlética, y las pruebas combinadas. Estas últimas también se conocen como decatlón y, como su propio nombre indica, se compone de diez pruebas: tres de lanzamiento, tres de saltos y cuatro de carreras.

              La disciplina fue desarrollándose a lo largo de los siglos, desde las primeras pruebas hasta su reglamentación. Los Juegos Olímpicos son el evento internacional más prestigioso y visto por todo el planeta. Los Juegos Olímpicos se celebran cada cuatro años desde 1896 y el atletismo es la disciplina más importante en ellos. Desde 1982, la Asociación Internacional de Federaciones de Atletismo (IAAF), que es el organismo responsable de la regulación de la disciplina, ha flexibilizado sus normas acabando con el periodo amateur de la disciplina. El primer Campeonato Mundial de Atletismo se organizó en 1983 y tienen lugar cada dos años desde 1990.
              </p>
                                    
                <div id="video-container">
                  <video id="video" width="640" height="365">
                    <source src="assets/videos/atletismo.mp4" type="video/mp4">
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
                    <button type="button" id="full-screen"><i class="fas fa-compress"></i></button>
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