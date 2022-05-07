<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIENVENIDOS A BLASTER</title>
</head>
<body>

<?php
session_start();
if(!isset($_SESSION["usuario"])) {

    header("Location:IniciarSesion.php ");
}
?>    
    
    <header class="header">
        <div>
            <figure>
                <!--<img src="modelados/blasterblog.png" alt="logotipo de blasterblog" width="120" height="60" >-->
            </figure>
        </div>    
        <div id= "encabezado">
            <div id="logo">
                BlasterBlog
            </div>

            <div id="menu">
                <ul>
                    <li><a href="../index.php" class="active-menu">Inicio</a></li>
                    <li><a href="" class="enlace">Noticias</a></li>
                    <li><a href="" class="enlace">Foros</a></li>
                    <li><a href="../perfil/perfil.php" class="enlace"> perfil</a></li>
                </ul>
            </div>
        </div>
    </header>  
    <p><h1>CONFIRMACION DE REGISTRO</h1></p>
    <?php
    
    echo "bienvenido a blaster nos complace mucho tu visita "  . $_SESSION["usuario"] . "<br><br>";
   
    ?>
    
</body>
</html>