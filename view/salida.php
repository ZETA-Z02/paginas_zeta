<?php
SESSION_START();

require'../controller/report.controller.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALIR</title>
</head>
<body>
    <h1>GRACIAS POR VISITARNOS</h1>
<?php echo $mensaje; ?><a href="principal.php">VOLVER A PAGINA PRINCIPAL</a>
    <h2>Sus reportes enviados</h2>
    <p>aqui pondre los reportes de 'tareas'</p>
    <p>aqui pondre los reportes de 'avances'</p>
    <p>aqui el resultado del cehckbox 
    </p>
    

    <a href="../controller/salir.controller.php">VOLVER A LOGUIN</a>
    <br>
    
</body>
</html>