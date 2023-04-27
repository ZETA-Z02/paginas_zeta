<?php
include"../model/validar.model.php";
$validar = new Validar();

//aqui llebnar los datos para insertar
//$validar->reporte('');

if(isset($_POST['tarea']) && isset($_POST['avance'])){
    if(isset($_POST['completo'])){
        $checkbox = $_POST['completo'];
        $tarea = $_POST['tarea'];
        $avance = $_POST['avance'];
        $checkbox = 1;
        $validar->reporte($tarea,$avance,$checkbox);
        error_reporting(0);
        header("location: ../view/principal.php");
    }else{
        $checkbox = $_POST['completo'];
        $checkbox = 0;
        $tarea = $_POST['tarea'];
        $avance = $_POST['avance'];
        $validar->reporte($tarea,$avance,$checkbox);
        error_reporting(0);
        header("location: ../view/principal.php");
    }
}else{
    $mensaje = 'no ingreso su reporte, volver a principal para llenar? ';
}



?>