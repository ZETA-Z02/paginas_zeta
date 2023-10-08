<?php
//crear una manera de registrarse e iniciar sesion con SESSION_START();
//el usuario puede entrar con sus mismos datos a la pagina principal con sesion start 
//crear una manera de salir de la pagina y cerrar sesion, SESSION_DESTROY();
Class Conexion{

    private $conn;

    public function __construct(){

        $host = "localhost";
        $user = "jersson";
        $pass = "jersson";
        $db   = "senati";

        $this->conn = new mysqli($host, $user, $pass, $db);

        if ($this->conn->connect_error){
            echo "error al conectar con la nase de datos: (' . $this->conn->connect_error . ')";
            exit();
        }else{
            echo 'conexion exitosa '.$this->conn->host_info. "<br>";  //else es para imprimir que la conexion fue exitosa       
            
        }
        return $this->conn;
    }
	public function ConsultaSin($sql)
    {
        # Sirve para: INSERT, UPDATE, DELETE
        #echo $sql;

        if(!$this->conn->query($sql)){
            echo "Error. ".mysqli_error($this->conn);
            exit();
        }

        return true;
    }

    public function ConsultaCon($sql)
    {
        # Sirve para: SELECT

        if(!$result = $this->conn->query($sql)){
            echo "Error: ".mysqli_error($this->conn);
            return false;
            exit();
        }

        return $result;
    }

    public function ConsultaArray($sql)
    {
        # Sirve para: SELECT convertido en array
        #echo $sql;

        if(!$result = $this->conn->query($sql)){
            echo "Error. ".mysqli_error($this->conn);
            return false;
        }

        $data = $result->fetch_array(MYSQLI_ASSOC);
        return $data;
    }
}
?>