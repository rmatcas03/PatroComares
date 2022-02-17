<?php

class Usuario {
    
    private $iduser, $firstname, $lastname, $email, $password, $birthdate, $postalcode, $tlf;

    public function __construct($iduser="", $firstname="", $lastname="", $password="", $email="", $birthdate="", $postalcode="", $tlf="")
    {
        $this->iduser = $iduser;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->password = $password;
        $this->email = $email;
        $this->birthdate = $birthdate;
        $this->postalcode = $postalcode;
        $this->tlf = $tlf;
    }

    public function insertarUsuario($iduser, $firstname, $lastname, $email, $password, $birthdate, $postalcode, $tlf)
    {
        $this->iduser = $iduser;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->password = $password;
        $this->email = $email;
        $this->birthdate = $birthdate;
        $this->postalcode = $postalcode;
        $this->tlf = $tlf;
    }



    public function __get($name) {
        return $this->$name;
    }
 
    public function __set($name, $value) {
        $this->$name = $value;
    }

    function nuevoUsuario($iduser, $firstname, $lastname, $email, $password, $birthdate, $telefono, $postalcode, $tlf) {
        $this->iduser = $iduser;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->password = $password;
        $this->email = $email;
        $this->birthdate = $birthdate;
        $this->postalcode = $postalcode;
        $this->tlf = $tlf;
    }
    
}
