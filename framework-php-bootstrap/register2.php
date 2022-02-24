<?php 



//Construir sentencia insert sql

//recuperar id del usuario insertado

//establecer la variable de session "iduser" con el id de usuario insertado

//cerrar conexión a bbdd

//establecer login_button a ""

//redirigir a index.php


require_once("includes/a_config.php"); // Datos para conectar a la base de datos. 
$nombreServidor = "localhost"; $nombreUsuario = "diw"; $passwordBaseDeDatos = "abc123."; $nombreBaseDeDatos = "patrocomares"; 
// Crear conexión con la base de datos. 
$conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos); 
// Validar la conexión de base de datos. 
if ($conn ->connect_error) { die("Connection failed: " . $conn ->connect_error); } 


if(isset($_POST['enviar'])) { 
 $usuario = $_POST['user_first_name'];
 $apellido=$_POST['user_last_name']; 
 //$password = $_SESSION['password']; 
 $correo =$_POST['user_email_address'];

 $fechaNac=$_POST['fecha_nacimiento'];
 $codigoPstl=$_POST['codigoPostal'];
 $tlf=$_POST['tlf'];
 
 $pass=$_POST['password'];

 
 $sql = "INSERT INTO user ( firstname, lastname, email, birthdate, postalcode ,tlf , password) VALUES ( '$usuario','$apellido','$correo','$fechaNac','$codigoPstl','$tlf',' $pass')"; 
 //("INSERT INTO user (iduser, firstname, lastname, email, password, birthdate, postalcode, tlf) VALUES ('$usuario->iduser','$usuario->firstname','$usuario->lastname','$usuario->email','$pass','$usuario->birthdate','$usuario->postalcode', '$usuario->tlf')");

 $conn->query($sql); 
header("Location:index.php"); 
 
}
?>