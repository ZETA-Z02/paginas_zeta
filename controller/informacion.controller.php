<?php
SESSION_START();

if(isset($_POST['dni'])){
$dni = $_POST['dni1'];
$_SESSION['dni']=$dni;
}
header("location:../view/principal.php");


?>