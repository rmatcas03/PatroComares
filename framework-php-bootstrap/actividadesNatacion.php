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
        <h1> Natacion en PatroComares</h1>
      </div>
      
      <div>

        
        <div class="card-group mb-5">
            <div class="card">
              
              <div class="card-body">
                <p class="card-text text-center"> Equipo profesional de natacion </p>
                <img class="card-img-top" src="assets\img\imgActividades\natacion1.jpg" alt="Card image cap">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.

                                    Some quick example text to build on the card title and make up the bulk of the card's content.

                                    Some quick example text to build on the card title and make up the bulk of the card's content.

                                    Some quick example text to build on the card title and make up the bulk of the card's content.

                                    Some quick example text to build on the card title and make up the bulk of the card's content.

                                    Some quick example text to build on the card title and make up the bulk of the card's content.

                                    Some quick example text to build on the card title and make up the bulk of the card's content.

                                    Some quick example text to build on the card title and make up the bulk of the card's content.

                                    Some quick example text to build on the card title and make up the bulk of the card's content.

                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                    
                                    </p>
                
              </div>
            </div>

            <div class="card">
              
              <div class="card-body">
                
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.

                                    Some quick example text to build on the card title and make up the bulk of the card's content.

                                    Some quick example text to build on the card title and make up the bulk of the card's content.

                                    Some quick example text to build on the card title and make up the bulk of the card's content.

                                    Some quick example text to build on the card title and make up the bulk of the card's content.
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
                    <button type="button" id="play-pause" class="play">Play</button>
                    <progress id="seek-bar" value="0" max="100"></progress>
                    <button type="button" id="mute">Mute</button>
                    <input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1">
                    <button type="button" id="full-screen">Full-Screen</button>
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