<?php
include "conexion.php";

class Reports{
    
    private $conn;

    function __construct(){
        $this->conn = new Conexion();
        return $this->conn;
    }

    public function insertar($title,$description){
        $sql= "INSERT INTO task(title, description) VALUES('$title','$description');";
        $this->conn->ConsultaSin($sql);
    }
    public function edit($title,$description,$id){
        $sql ="UPDATE task set title = '$title', description = '$description' WHERE id='$id';";
        $this->conn->ConsultaSin($sql);

    }
    public function borrar($id){
        $sql = "DELETE FROM task WHERE id = '$id';";
        $this->conn->ConsultaSin($sql);

    }

    public function select(){
        $sql="SELECT * FROM task;";
        $data=$this->conn->ConsultaCon($sql);
        return $data;

    }
    public function personal($id){
        $sql ="SELECT * FROM task WHERE id='$id';";
        $data = $this->conn->ConsultaCon($sql);
        return $data;

    }





}







?>