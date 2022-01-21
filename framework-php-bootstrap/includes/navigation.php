<div class="container">
    <nav class="navbar navbar-expand-lg bg-primary text-uppercase fixed-top" id="mainNav">
        <div class="row">
            <div class="col-6">
                <a class="navbar-brand" href="index.php"><img class="img-fluid p-1 w-50" src="\assets\img\logos\logo.png"></a>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <button class="navbar-toggler text-uppercase font-weight-bold text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>

                </button>
            </div>
        </div>


        <div class="collapse navbar-collapse mx-auto" id="navbarResponsive">
            <ul class="navbar-nav ms-auto d-flex align-items-center">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link <?php if ($CURRENT_PAGE == "¿Quienes somos?") { ?>active<?php } ?> py-3 px-0 px-lg-3 rounded" href="quienesSomos.php">¿Quienes somos?</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link <?php if ($CURRENT_PAGE == "Actividades") { ?>active<?php } ?> py-3 px-0 px-lg-3 rounded" href="actividadesPortada.php">Actividades</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link <?php if ($CURRENT_PAGE == "juegos") { ?>active<?php } ?> py-3 px-0 px-lg-3 rounded" href="juegos.php">Juegos</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link py-3 px-0 px-lg-3  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Instalaciones
                    </a>
                    <div class="dropdown-menu bg-primary text-uppercase border-0 " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-white" href="/instalacionesFutbol.php">Pista de fútbol</a>
                        <a class="dropdown-item text-white" href="/instalacionesPadel.php">Pista de pádel</a>
                        <a class="dropdown-item text-white" href="/instalacionesTenis.php">Pista de tenis</a>
                        <a class="dropdown-item text-white" href="/instalacionesAtletismo.php">Pista de atletismo</a>
                        <a class="dropdown-item text-white" href="/instalacionesPiscina.php">Piscina</a>
                        <a class="dropdown-item text-white" href="/instalacionesDojo.php">Dojo</a>
                    </div>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link <?php if ($CURRENT_PAGE == "Eventos") { ?>active<?php } ?> py-3 px-0 px-lg-3 rounded" href="eventos.php">Eventos</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link <?php if ($CURRENT_PAGE == "Noticias") { ?>active<?php } ?> py-3 px-0 px-lg-3 rounded" href="noticiasDestacadas.php">Noticias</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link <?php if ($CURRENT_PAGE == "Contacto") { ?>active<?php } ?> py-3 px-0 px-lg-3 rounded" href="contact.php">Contacto</a></li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="btn btn-secondary mb-3 mb-sm-0" role="button" href="login.php">Login</a>
                </li>
            </ul>
        </div>
</div>
</nav>