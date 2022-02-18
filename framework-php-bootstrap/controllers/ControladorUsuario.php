<?php

require_once "includes\Conexion.php";

class ControladorUsuario {

    public static function insertarUsuario($usuario){
        try{
            $conexion = new Conexion();
            $pass = md5($usuario->password);
            $inserto = $conexion->exec("INSERT INTO user (iduser, firstname, lastname, email, password, birthdate, postalcode, tlf) VALUES ('$usuario->iduser','$usuario->firstname','$usuario->lastname','$usuario->email','$pass','$usuario->birthdate','$usuario->postalcode', '$usuario->tlf')");
        }catch(PDOException $ex){
            die('error con la base de datos'. $ex->getMessage());
        }
        unset($conexion);
    }
}
?>