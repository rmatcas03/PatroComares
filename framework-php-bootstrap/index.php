<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>
<main>
<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container-fluid">
        <div class="row">
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
                            <img src="assets\img\portfolio\cabin.png" alt="Los Angeles" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets\img\portfolio\game.png" alt="Chicago" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets\img\portfolio\cake.png" alt="New York" class="d-block w-100">
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
        <div class="row">
            <div class="col-md-4">
                   <div class="card">
                        <div class="card-img"><img src="assets\img\portfolio\cabin.png" width="300px" height="300px"></div>
                        <div class="card-text">Noticia 1</div>
                    </div>
                 </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img"><img src="assets\img\portfolio\cabin.png" width="300px" height="300px"></div>
                    <div class="card-text">Noticia 2</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img"><img src="assets\img\portfolio\cabin.png" width="300px" height="300px"></div>
                    <div class="card-text">Noticia 3</div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>

<?php include("includes/footer.php");?>

</body>
</html>