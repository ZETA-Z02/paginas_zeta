<?php
include('../model/reports.php');

$reports = new Reports();



if(isset($_POST['save_task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    echo $title;
    echo $description;

    //primera consulta
    $reports->insertar($title,$description);
    if(!$reports) {
        die("query falled");
    }

    $_SESSION['message'] = "Task Saved succesfully";
    $_SESSION['message_type'] = "success";

    header("location: ../view/reporte.php");
}

?>