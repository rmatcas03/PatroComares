<?php 
include("includes/a_config.php");
include("includes/dbconnection.php"); 

//recuperar campos del formulario

$comentario = $_POST["comentario"];

//Construir sentencia insert sql

$sql = "INSERT INTO Actividad (id_usuario, actividad, fecha, puntuacion, comentario) values (".$_SESSION["iduser"].", ".$actividad.", ".$fecha.", ".$puntuacion.", ".$comentario.")";
//establecer la variable de session "iduser" con el id de usuario insertado

//cerrar conexión a bbdd

//establecer login_button a ""

//redirigir a index.php



?>