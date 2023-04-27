<?php 
include "../model/reports.php";

$reports =new Reports();

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $reports->borrar($id);
    if(!$reports) {
        die("Query Failed");
    }

    $_SESSION['message'] ='Task Removed Successfully';
    $_SESSION['message_type'] = 'danger';
    header("Location: ../view/reporte.php");

}
?>