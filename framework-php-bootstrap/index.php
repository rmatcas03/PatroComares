<?php include("includes/a_config.php"); 
include("includes/dbconnection.php");
include("includes/googleconnect.php")?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/head-tag-contents.php"); ?>
    

</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <main>
            <?php if(isset($_SESSION['user_email_address'] )&& !isset($_SESSION['iduser'] ) ){
                include('includes\registermodal.php');
            }
            ?>
        <div class="container-fluid">
            <div class="row my-2">
                <div class="col">
                    <!-- Carousel -->
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">
                        <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        </div>

                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets\img\carroussel\descarga1.jpg" alt="Chicago" style="width: 100%; height: 550px;" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assets\img\carroussel\descarga.jpg" alt="Los Angeles" style="width: 100%; height: 550px;" class="d-block w-100">

                            </div>
                            <div class="carousel-item">
                                <img src="assets\img\carroussel\images.jpg" alt="New York" style="width: 100%; height: 550px;" class="d-block w-100">
                            </div>
                        </div>

                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>

            </div>
            <div class="row mb-2">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top " src="assets\img\imgTrabajo\futbol.jpg" alt="Card image" style="width:100%; height:300px">
                            <div class="card-body">
                                <h4 class="card-title">Lucena fc</h4>
                                <a href="noticiasFutbol.php" class="btn btn-secondary">Más información</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="assets\img\imgTrabajo\natacion1.jpg" alt="Card image" style="width:100%; height:300px">
                            <h4 class="card-title">Piscina municipal</h4>
                            <p class="card-text">Clases de natación en nuestra piscina municipal</p>
                            <a href="noticiasNatacion.php" class="btn btn-secondary">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="assets\img\imgTrabajo\tenis.jpg" alt="Card image" style="width:100%; height:300px">
                            <h5 class="card-title">Clases de tenis </h5>
                            <p class="card-text">Comienzan nuestras clases de tenis</p>
                            <a href="noticiasTenis.php" class="btn btn-secondary">Más información</a>
                        </div>
                    </div>
                </div>
            </div>
            
    </main>

    <?php include("includes/footer.php"); ?>

</body>

</html>