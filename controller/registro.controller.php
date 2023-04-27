<?php
SESSION_START();
include"../model/registrar.model.php";
//instanciar la clase registrar
$registrar = new Registrar();

//post para llamar los datos de index
$nombre =$_POST['username'];
$password =$_POST['newPassword'];
$correo =$_POST['newEmail'];

$email = $correo."@senati.pe";

$_SESSION['email']=$email;

if(ctype_alpha($nombre)){
    
    if(!$email){
        echo 'ingrese su correo <br>';  
        echo "<a href='../index.html'>volver al LOGUIN</a>"."<br>";
    }else{
        echo 'se cumplira la funcion dada';
        $registrar->llenar($nombre,$password,$email);
        header("location:../index.html");
    }
}else{
    echo 'tu USERNAME contiene numeros, NO puede registrarse  <br>';
    echo "<a href='../index.html'>volver al LOGUIN</a>"."<br>";
    
}


?>