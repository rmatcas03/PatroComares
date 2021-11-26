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
	case "/contact.php":
		$CURRENT_PAGE = "Contact";
		$PAGE_TITLE = "Contact Us";
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
	case "/instalacionesPadel.php":
		$CURRENT_PAGE = "instalaciones";
		$PAGE_TITLE = "Instalaciones Pádel";
		break;			
	case "/contact.php":
		$CURRENT_PAGE = "Contact";
		$PAGE_TITLE = "Contact Us";
		break;
	default:
		$CURRENT_PAGE = "Index";
		$PAGE_TITLE = "Welcome to my homepage!";
}
