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
		$PAGE_TITLE = "Contacto";
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
	case "/eventos.php":
		$CURRENT_PAGE = "Eventos";
		$PAGE_TITLE = "Eventos";
		break;
	default:
		$CURRENT_PAGE = "Index";
		$PAGE_TITLE = "Welcome to my homepage!";
}

require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('462756506190-7tn2ikihdfqru2nh4gs8j3veoe1novuv.apps.googleusercontent.com');

$google_client->setClientSecret('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');

$google_client->setRedirectUri('http://'.$_SERVER['SERVER_NAME'].'/index.php');

$google_client->addScope('email');

$google_client->addScope('profile');

session_start();

$login_button = '';