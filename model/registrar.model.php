<?php
include"conexion.php";

Class Registrar{
    private $conn;

    function __construct(){
        $this->conn = new Conexion();
        return $this->conn;
    }

    public function llenar($nombre,$password,$correo){
        $sql = "INSERT INTO usuario1 VALUES ('$nombre','$password','$correo',null);";
        $this->conn->ConsultaSin($sql);
    }
    
}

?>