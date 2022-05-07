<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BIENVENIDOS A BLASTER</title>
</head>
<body>
    <header class="header">

<?php
session_start(); 
if(!isset($_SESSION["usuario"])) {

    header("Location:IniciarSesion.html ");
}
?>

<header class="header">
<div>
    <figure>
        <img src="modelados/blasterblog.png" alt="logotipo de blasterblog" width="120" height="60" >
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
            <li><a href="perfil.php" class="enlace"> perfil</a>
            <li><a href="../sesiones/CerrarSesion.php">Cerrar Sesion</a></li>
        </ul>
    </div>
</div>
</header> 

    <section class="">
        <form action="subirNoticia.php" method="post" enctype="multipart/form-data">
        <h3>Ingresa los datos de la publicacion</h3>

        <label for="titulo">Titulo de la Noticia:</label>
        <input class="controls" type="text" name="titulo" placeholder="titulo" id="titulo" required>

        <br><hr>                 
        agrega la noticia <input name="archivo" id="archivo" type="file" accept=".txt" required/> 
        <input type="submit" name="subir" value="subir"/> 
        </form>
    </section>

</body>