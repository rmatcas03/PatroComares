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
        <h1>Proximas Actividades Futbolisticas</h1>
      </div>
      
      <div>

        
        <div class="card-group mb-5">
            <div class="card">
              
              <div class="card-body">
                <p class="card-text text-center"> Liga de futbol infantil </p>
                <img class="card-img-top" src="assets\img\imgActividades\futbol1.jpg" alt="Card image cap">
                <p class="card-text">¿Qué entendemos por Deporte en la infancia? </p>
                <p class="card-text">

    Con ésta pregunta debemos entrar en la discusión del deporte moderno, el deporte que se lleva a cabo en nuestro medio.

    La gran mayoría acordaremos que debe ser una actividad formativa y educativa, pero la realidad nos demuestra, que salvo honrosas excepciones, los niños en el deporte son utilizados buscando rendimiento y resultados.

    Entonces deberemos preguntarnos ¿Qué es más importante el Deporte o el niño?

    Históricamente el niño ha atravesado por diferentes períodos, desde donde se lo tomaba como un adulto en miniatura, esperando de él las mismas respuestas y resultados de un adulto, hasta nuestros días, donde se le fue dando el lugar que le correspondía como niño. Niño que juega y que su única actividad importante es el juego. Con él se socializa, aceptando las reglas que el juego requiere, desarrollándose psíquica y motrizmente ya que va adecuando su cuerpo al movimiento que la necesidad requiere, adecuándose constantemente a los problemas que le presenta el medio. (Problemas que deberán respetar las distintas etapas evolutivas).
             
                                    </p>
                
              </div>

              <div class="container-fluid text-center">
                <a href="insertarActividad.php?actividad=futbol&id_actividad=1" class="btn btn-secondary">Inscribirse</a>
              </div>

            </div>

            <div class="card">
              
              <div class="card-body">
                
              <p class="card-text"> Nada es permanente, con excepción del cambio </p>
              <p class="card-text">

El camino al éxito está siempre en construcción, es un proceso permanente y no una meta que se debe alcanzar.

La meta principal en la formación de técnicos de fútbol crear entrenadores capaces de hacer cosas nuevas y no solo repetir lo que han hecho otras generaciones de técnicos. Necesitamos más maestros creativos con capacidad de innovación, que en vez de enseñar a sus alumnos todo lo que saben, despierten con métodos más eficaces todo el potencial dormido en cada uno de sus discípulos, llevándolos más allá de sus limitaciones.

En resumidas cuentas deben aplicar otro estilo de enseñanza que no se base en el comando, en vez de ser instructores y entrenadores deben convertirse en creadores, planificadores, observadores y consejeros expertos que alienten a sus alumnos a avanzar y superarse a si mismos y a su maestro.

Nuestra juventud prefiere ser más estimulada que instruida.

El verdadero aprendizaje solo se cumple, transfiriendo a los alumnos las decisiones que hasta ahora estaban a cargo de los entrenadores. Bloom considera la creatividad como la forma más elevada de actividad mental y de los logros humanos, la creatividad tiene mucho que ver con el juego. ¡Toda la creación es una recreación!

La función trascendental del técnico es hacer pensar. Cuando un niño realiza un pase en vez de corregirle, preguntémosle que nos describa que le pareció el pase que efectuó. Desarrollemos en nuestros jugadores la habilidad de enseñarse a si mismos. Enseñar por medio de preguntas obliga al alumno a pensar, a juzgar, a mirar y a evaluar.


              </p>
                
                <div id="video-container">
                  <video id="video" width="640" height="365">
                    <source src="assets/videos/futbol.mp4" type="video/mp4">
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