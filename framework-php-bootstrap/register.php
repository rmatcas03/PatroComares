<?php 
include("includes/a_config.php");
include("includes/dbconnection.php"); 


//Construir sentencia insert sql

//recuperar id del usuario insertado

//establecer la variable de session "iduser" con el id de usuario insertado

//cerrar conexión a bbdd

//establecer login_button a ""

//redirigir a index.php

if (isset($_SESSION["usuarioGoogle"])) $usuarioGoogle = unserialize($_SESSION["usuarioGoogle"]);
if (isset($_POST['enviar'])) {
    $usuario = new Usuario();
    $usuario->insertarUsuario($_POST['nombre'], $_POST['apellido1'], $_POST['apellido2'], $_POST['password'], $_POST['email'], $_POST['fechaNacimiento'], $_POST['telefono'], $_POST['pais'], 1, (isset($usuarioGoogle))? $usuarioGoogle->imagen : null);
    ControladorUsuarios::nuevoUsuario($usuario);
    $usuario = ControladorUsuarios::buscarUsuario($usuario->email);
    $_SESSION["usuarioAutenticado"] = serialize($usuario);
    header('location:index.php');	
}


?>