<nav class="navbar navbar-expand-lg bg-primary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.php">PatroComares</a>
            <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link <?php if ($CURRENT_PAGE == "¿Quienes somos?") {?>active<?php }?> py-3 px-0 px-lg-3 rounded"
                            href="index.php">¿Quienes somos?</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link <?php if ($CURRENT_PAGE == "Actividades") {?>active<?php }?> py-3 px-0 px-lg-3 rounded"
                            href="about.php">Actividades</a></li>
                            <li class="nav-item dropdown">
                    <a class="nav-link py-3 px-0 px-lg-3  dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Instalaciones
                    </a>
                    <div class="dropdown-menu bg-primary text-uppercase border-0 " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-white" href="#">Pista de fútbol</a>
                        <a class="dropdown-item text-white" href="#">Pista de baloncesto</a>
                        <a class="dropdown-item text-white" href="#">Pista de pádel</a>
                    </div>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link <?php if ($CURRENT_PAGE == "Eventos") {?>active<?php }?> py-3 px-0 px-lg-3 rounded"
                            href="contact.php">Eventos</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link <?php if ($CURRENT_PAGE == "Noticias") {?>active<?php }?> py-3 px-0 px-lg-3 rounded"
                            href="contact.php">Noticias</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link <?php if ($CURRENT_PAGE == "Contacto") {?>active<?php }?> py-3 px-0 px-lg-3 rounded"
                            href="contact.php">Contacto</a></li>
                            <div class="container mt-3">
                         <button type="button" class="btn btn-secondary btn-sm">Login</button>
                     </div>
                </ul>
            </div>
        </div>
    </nav>
