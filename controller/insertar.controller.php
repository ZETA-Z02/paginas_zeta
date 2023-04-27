<?php
SESSION_START();

include"../model/validar.model.php";

$validar=new Validar();




//continuar con validacion, si dni no es 8 caracteres no entra, si nombres contiene numeros tambien rechaza
//si apellidos tiene numeros tambien se rechaza
//profesion tambien puro caracteres
if(isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['profesion']) && isset($_POST['dni']))
{
    if(!ctype_alpha($_POST['dni'])){
        $nombre=$_POST['nombres'];
        $apellido=$_POST['apellidos'];
        $profesion=$_POST['profesion'];
        $dni=$_POST['dni'];

        $validar->insert($nombre,$apellido,$profesion,$dni);

        $data = $validar-> informacion($dni);
        header("location: ../view/principal.php");
    }else{
        echo 'error al introducir datos'.'<br>';
        //echo "<a href='../view/principal.php'>volver al LOGUIN</a>"."<br>";
    }
}else{
   echo "no introdujo nada";
}

?>