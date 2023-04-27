<?php

require"../controller/insertar.controller.php";

$nombre = $_SESSION['username'];
$email=$_SESSION['EMAIL'];


?>

<!DOCTYPE html>
<html lang="en">
<!--html se dividi en 2 estiquetas principales HEAD Y BODY-->

<head>
    <meta charset="UTF-8">  
    <!--Tipo de CODIFICACION de caracteres-->
    <meta http-equiv="Keywords" content="nascar, carreras, Puno">
    <!--Palabras CLAVE para las busquedas-->
    <meta name="Descripción" content="Esta es una pagina ejemplo para detalles de nascar">
    <!--Informacón general de la WEN-->
    <title>INICIO</title>
    <!--En el HEAD tambien se puede cargar elementos externos al HTML-->
    <link rel="short icon" href="img/logo.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/9a409a3028.js" crossorigin="anonymous"></script>
    
</head>

<body>
    <header>
        <div class="principal">
            <a href="index.html">
                <img src="img/logo1.jpg" class="logo" alt="imagen icon" width="" height="30" >
                <h1><?php echo $nombre;?></h1>
            </a>
            <nav>
                <!--a[href="#"]*5-->
                <a class="i1" href="#inicio">Inicio</a>
                <a class="i1" href="#yo">acerca de</a>
                <a class="i1" href="#habilidades">portafolio</a>
                <a class="i1" href="#experiencia">experiencia</a>
                <a class="i1" href="#servicios">servicios</a>
                <a class="i1" href="salida.php">salir</a>
            </nav>
            <section class="textos-header">
                <h1>Todo sobre <?php echo $email;?></h1>
                <h2>Una pagina para presentar a <?php echo $nombre;?> y sus habilidades</h2>
                <a href="#yo" class="boton boton-nosotros">Ver más</a>
            </section>
            <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(255, 255, 255);"></path></svg></div>
        </div>
    </header>
    <main>
       <section class="contenedor sobre-nosotros" id="yo">
        <h2 class="titulo">¿Quien soy?</h2>
        <div class="contenedor-sobre-nosotros">
            <div class="imagenfondo">
                <img src="img/fondo.jpg" alt="fondo imagen inicio" class="imagen-fondo-us">
                <div class="link">
                    <a class="botonn boton-link" href="#">mas nascar aqui</a>
                </div>
            </div>
            
            <div class="contenido-textos">
                <h3><span>1</span>HOLA, Yo soy <?php echo $nombre;?></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt architecto ullam aut accusantium facilis maiores dolore sequi dolorum, vero et praesentium tempore nulla minima enim totam pariatur voluptatum. Voluptas, beatae?  </p>
                <h3><span>2</span>mi profesion es <?php echo "{aqui ingresar profesion con una variable}"; ?></h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, dolorem nisi? Voluptatum illum magnam repellat facere soluta nostrum maiores perferendis praesentium, harum id molestiae fugiat voluptas commodi? Veritatis, id quos!
                Quibusdam debitis fugit, nihil esse veritatis voluptas numquam corporis eligendi ipsa ea eius laboriosam libero repudiandae saepe cupiditate voluptates. Consequuntur ipsum deleniti impedit earum accusantium velit, fugit facere molestias veritatis.
                </p>
            </div>
        </div>
       </section>

       <section class="portafolio" id="habilidades">
            <div class="contenedor">
                <h2 class="titulo">Mas sobre autos de carreras</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="img/python.png" alt="imagen de portafolio">
                        <div class="img-galeria">
                            <img src="img/icono1.png" alt="icono puntero">
                            <p>nuestro trabajo</p>
                            <a href="#" class="boton boton-servicios1">Ver más</a>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="img/java.png" alt="imagen de portafolio">
                        <div class="img-galeria">
                            <img src="img/icono1.png" alt="icono puntero">
                            <p>nuestro trabajo</p>
                            <a href="#" class="boton boton-servicios1">Ver más</a>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="img/php.png" alt="imagen de portafolio">
                        <div class="img-galeria">
                            <img src="img/icono1.png" alt="icono puntero">
                            <p>nuestro trabajo</p>
                            <a href="#" class="boton boton-servicios1">Ver más</a>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="img/js.png" alt="imagen de portafolio">
                        <div class="img-galeria">
                            <img src="img/icono1.png" alt="icono puntero">
                            <p>nuestro trabajo</p>
                            <a href="#" class="boton boton-servicios1">Ver más</a>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="img/html.png" alt="imagen de portafolio">
                        <div class="img-galeria">
                            <img src="img/icono1.png" alt="icono puntero">
                            <p>nuestro trabajo</p>
                            <a href="#" class="boton boton-servicios1">Ver más</a>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="img/css.png" alt="imagen de portafolio">
                        <div class="img-galeria">
                            <img src="img/icono1.png" alt="icono puntero">
                            <p>nuestro trabajo</p>
                            <a href="#" class="boton boton-servicios1">Ver más</a>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="img/git.png" alt="imagen de portafolio">
                        <div class="img-galeria">
                            <img src="img/icono1.png" alt="icono puntero">
                            <p>nuestro trabajo</p>
                            <a href="#" class="boton boton-servicios1">Ver más</a>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="img/mysql.png" alt="imagen de portafolio">
                        <div class="img-galeria">
                            <img src="img/icono1.png" alt="icono puntero">
                            <p>nuestro trabajo</p>
                            <a href="#" class="boton boton-servicios1">Ver más</a>
                        </div>
                    </div>

                </div>
            </div>
       </section>
        <section class="clientes contenedor" id="experiencia">
            <h2 class="titulo">Sobre mis estudios y experiencia</h2>
            <div class="cards">
                <div class="card">
                    <img src="img/senati.jpg" alt="foto">
                    <div class="contenido-texto-card">
                        <h4>Insituto SENATI</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis enim molestiae ad soluta? Aperiam eligendi vero voluptate est magnam voluptates, dolorem corrupti odit! Dolore vel voluptatem corporis itaque veniam illo.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/katari.jpg" alt="foto">
                    <div class="contenido-texto-card">
                        <h4>Experiencia</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus doloribus saepe, quisquam mollitia illo rem magni! Ex dolorum dolores provident explicabo eaque deserunt distinctio aperiam molestiae numquam, praesentium repellendus sequi.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-services" id="servicios">
            <div class="contenedor">
                <h2 class="titulo">SERVICIOS</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/pag.png" alt="imagen referencial para explicar algo">
                        <h3>Paginas web</h3>
                        <p>Registros de trabajadores</p>
                        <a href="#" class="boton boton-servicios">Ver más</a>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/pag.png" alt="imagen referencial para explicar algo">
                        <h3>APLICACIONES WEB</h3>
                        <p>Registro de asistencia</p>
                        <a href="#" class="boton boton-servicios">Ver más</a>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/pag.png" alt="imagen referencial para explicar algo">
                        <h3>APLICACIONES</h3>
                        <p>Todo el registro de informes y asistencias</p>
                        <a href="#" class="boton boton-servicios">Ver más</a>
                    </div>
                </div>
            </div>
        </section>

      <section id="formulario">
       <div >
            <div class="center">
                <h4>INGRESE SUS DATOS</h4>
                    <form action="../controller/insertar.controller.php" method="post">
    
                        <input type="text"  name="nombres" placeholder="nombres" minlength="1"><br>
                        <input type="text"  name="apellidos" placeholder="apellidos"  minlength="1"><br>
                        <input type="text"  name="profesion" placeholder="profesion" minlength="1"><br>
                        <input type="text"  name="dni" placeholder="dni" minlength="8"><br>
                        
                        <input type="submit" ><br>
                    </form>
            </div>
        </div>
<br>
<br>
        <div>
            <div class="center">
                <h4>Busque sus datos SUS DATOS</h4>
                    <form action="../controller/informacion.controller.php" method="post">
                        <input type="text"  name="dni1" placeholder="dni" minlength="8">
                        <input type="submit" >
                    </form>
            </div>
        </div>
         

       </section><br><br>

       <section><?php include("reportes.php"); ?></section>
       
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>TELEFONO</h4>
                <p>998777712</p>
            </div>
            <div class="content-foo">
                <h4>EMAIL</h4>
                <p>dota2jersson3@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>DIRECCION</h4>
                <p>AV.PALMERAS 322</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; ZETA.ZETA | Jersson Pelayo</h2>
    </footer>


</body>

</html>