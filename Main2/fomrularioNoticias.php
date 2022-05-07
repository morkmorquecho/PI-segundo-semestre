<!DOCTYPE html>
<head>
    <title>escribir noticia </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="">
</head>
<body>
    <header class="header">
        <?php
        session_start();
        if(isset($_SESSION["usuario"])){
            include("inicio/MenuTop.php");

        }else{

            include("inicio/MenuVisitante.php");
        }
        ?>
    </header>

    <section class="">
        <form method="post" action="CrearNoticia.php">

        <label for="titulo">Ingrese el titulo de la noticia</label>
        <input class="" type="text" name="titulo" placeholder="Usuario" id="titulo" required>
      
        <label for="artiuclo">ingresa el articulo:</label>
        <input class="" type="text" name="articulo" placeholder="articulo" id="articulo" required>
        
        <input class="buttons" type="submit" name="" value="Ingresar">
        </form>
    </section>
</body>