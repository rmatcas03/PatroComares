<?php

class Conexion extends PDO {
    
    private $dsn = "mysql:host=localhost;dbname=patrocomares;charset=utf8mb4";
    private $user = "diw";
    private $password = "abc123.";
    private $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    
    public function __construct() {
        parent::__construct($this->dsn, $this->user, $this->password, $this->options);
    }
    
}

