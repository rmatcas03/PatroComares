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
        <h1>Nueva Temporada de Tenis</h1>
      </div>
      
      <div>

        
        <div class="card-group mb-5">
            <div class="card">
              
              <div class="card-body">
                <p class="card-text text-center"> Partidos mas destacados </p>
                <img class="card-img-top" src="assets\img\imgActividades\tenis1.jpg" alt="Card image cap">
                <p class="card-text"> 
                El tenis es uno de los juegos más populares y practicados que existen. Con este deporte  ejercitarás cuerpo y mente y podrás practicarlo de manera individual o en equipo. Además es uno de los pocos deportes que permite jugar a hombres y mujeres al mismo tiempo. Y por supuesto, es bueno para todas las edades, por ejemplo, el tenis infantil, así que no tienes excusa para probarlo. Además, existen otras modalidades como el tenis de mesa que no puedes dejar pasar por alto.
                </p>
                
              </div>

              <div class="container-fluid text-center">
                <a href="insertarActividad.php?actividad=tenis&id_actividad=3" class="btn btn-secondary">Inscribirse</a>
              </div>

            </div>

            <div class="card">
              
              <div class="card-body">
                
              <p class="card-text">
              El tenis es un deporte que se juega ,principalmente, al aire libre, y  se puede practicar de manera individual, es decir, jugador contra jugador o entre parejas.

              La historia del tenis se remonta al siglo XIX, en el continente europeo. En sus primeros años es difundido masivamente, en los países anglosajones, razón por la cual, adopta el sobrenombre de “deporte blanco”. Asimismo, su ejercicio era reservado para las clases más acomodadas. Su fundador fue el comandante británico Walter Clopton Wingkifield. Es institucionalizado como deporte en el año 1926.

              Actualmente, la globalización de este deporte ha trascendido largamente razas y condición social.  En un principio fueron las colonias del imperio británico, las que incorporaron el tenis a sus prácticas habituales, dotándolas de un espíritu mestizo.

              Entre los torneos de tenis más importantes que se disputan, se encuentran el de Wimbledon, el Roland Garros y los abiertos de Estados Unidos. Sin embrago, el torneo internacional, que define al campeón mundial, es la Copa Davis, celebrada desde 1990.
              </p>
                
                <div id="video-container">
                  <video id="video" width="640" height="365">
                    <source src="assets/videos/tenis.mp4" type="video/mp4">
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