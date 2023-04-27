<?php
include"conexion.php";
Class Validar{

    private $conn;

    function __construct(){
        
        $this->conn = new Conexion();
    }
    
    public function validar($email,$password){
        $sql = "SELECT COUNT(*) as contar FROM usuario1 WHERE email = '$email' and pass = '$password';";
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }
    public function usuarios($email){
        $sql ="SELECT nombres , email FROM usuario1 WHERE email = '$email';";
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }

    public function insert($nombres,$apellidos,$profesion,$dni){
        $sql = "INSERT INTO informacion VALUES('$nombres','$apellidos','$profesion','$dni',null);";
        $this->conn->ConsultaSin($sql); 
    }   
    
    public function informacion($dni){
        $sql = "SELECT * FROM informacion WHERE dni = '$dni';";
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }

    public function reporte($tarea,$avance,$checkbox){
        $sql = "INSERT INTO reportes VALUES(null,'$tarea','$avance','$checkbox');";
        $this->conn->ConsultaSin($sql);
    }

    public function reportes($id){
        $sql = "SELECT tareas, avance, completado FROM reportes WHERE id_r = '$id';";
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }


}

?>