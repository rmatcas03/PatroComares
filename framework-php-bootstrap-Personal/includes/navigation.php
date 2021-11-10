<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
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
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link <?php if ($CURRENT_PAGE == "Instalaciones") {?>active<?php }?> py-3 px-0 px-lg-3 rounded"
                            href="contact.php">Instalaciones</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link <?php if ($CURRENT_PAGE == "Eventos") {?>active<?php }?> py-3 px-0 px-lg-3 rounded"
                            href="contact.php">Eventos</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link <?php if ($CURRENT_PAGE == "Noticias") {?>active<?php }?> py-3 px-0 px-lg-3 rounded"
                            href="contact.php">Noticias</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link <?php if ($CURRENT_PAGE == "Contacto") {?>active<?php }?> py-3 px-0 px-lg-3 rounded"
                            href="contact.php">Contacto</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link <?php if ($CURRENT_PAGE == "Login") {?>active<?php }?> py-3 px-0 px-lg-3 rounded"
                            href="contact.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
