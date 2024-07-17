<?php
//aqui se verificara al usuaario para darle acceso a la pagina principal
SESSION_START();
include"../model/validar.model.php";

$validar = new Validar();

//metodo post para recoger email y password que validaran si existe su usuario
$email = $_POST['email'];
$password = $_POST['password'];

//funcion validar para buscar su usuario en la base de datos devuelve el numero de coincidencias
$contar = $validar->validar($email,$password);

//funcion para recolectar datos del usuario
$user = $validar->usuarios($email);
$username = $user['nombres'];

if($contar['contar']>0){
    $_SESSION['username']= $username;
    $_SESSION['EMAIL'] = $email;
    echo 'funciona y tiene acceso';
    header("location:../view/principal.php");
}else{
    echo 'no tiene acceso <br>';
    header('location:../index.html');
}
?>