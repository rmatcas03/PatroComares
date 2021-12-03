<?php
switch ($_SERVER["SCRIPT_NAME"]) {
	case "/index.php":
		$CURRENT_PAGE = "Index";
		$PAGE_TITLE = "PatroComares";
		break;
	case "/about.php":
		$CURRENT_PAGE = "About";
		$PAGE_TITLE = "About Us";
		break;
	case "/contact.php":
		$CURRENT_PAGE = "Contact";
		$PAGE_TITLE = "Contact Us";
		break;
	case "/quienesSomos.php":
		$CURRENT_PAGE = "¿Quienes somos?";
		$PAGE_TITLE = "Quienes somos";
		break;
	case "/noticiasDestacadas.php":
		$CURRENT_PAGE = "noticias";
		$PAGE_TITLE = "Noticias Destacadas";
		break;
	case "/instalacionesFutbol.php":
		$CURRENT_PAGE = "instalaciones";
		$PAGE_TITLE = "Instalaciones Fútbol";
		break;
	case "/instalacionesBaloncesto.php":
		$CURRENT_PAGE = "instalaciones";
		$PAGE_TITLE = "Instalaciones Baloncesto";
		break;
	case "/instalaciones/instalacionesPadel.php":
		$CURRENT_PAGE = "instalaciones";
		$PAGE_TITLE = "Instalaciones Pádel";
		break;
	case "/instalacionesAtletismo.php":
		$CURRENT_PAGE = "instalaciones";
		$PAGE_TITLE = "Instalaciones Atletismo";
		break;
	case "/instalacionesNatacion.php":
		$CURRENT_PAGE = "instalaciones";
		$PAGE_TITLE = "Instalaciones Natación";
		break;
	case "/instalacionesDojo.php":
		$CURRENT_PAGE = "instalaciones";
		$PAGE_TITLE = "Instalaciones Dojo";
		break;
	case "/instalacionesGimnasio.php":
		$CURRENT_PAGE = "instalaciones";
		$PAGE_TITLE = "Instalaciones Gimnasio";
		break;
	case "/contact.php":
		$CURRENT_PAGE = "Contact";
		$PAGE_TITLE = "Contact Us";
		break;
	case "/login.php":
		$CURRENT_PAGE = "login";
		$PAGE_TITLE = "login";
		break;
	default:
		$CURRENT_PAGE = "Index";
		$PAGE_TITLE = "Welcome to my homepage!";
}
