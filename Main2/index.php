<!DOCTYPE html>
<html>
<head>
    <link rel ="icon" type="icon/png" href="">
    <title>mi blog</title>
    <meta charset="utf-8">
    <meta name="keywords" content="html, css, blog web, weblog, ">
    <meta name="description" content="Conoce las ultimas noticias sobre la animación 3D..">
    <meta name="refresh" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
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


            <?php
            session_start();
            if(isset($_SESSION["usuario"])){
                include("inicio/MenuTop.php");

            }else{

                include("inicio/MenuVisitante.php");
            }
            ?>
    </header>   

    <section id="principal">
        <section id="publicaciones">
            <article class="post">
                <a href="" class="enlace-post">
                    <h2 class="titulo-post">El modelado en autos..</h2>
                </a>
                <img src="modelados/GT.png" class="img-post">
                <p>
                    <strong>Por:</strong><span class="datos-publicaciones">Miguel Alejandre</span>
                    &nbsp; &nbsp;
                    <strong>Fecha: </strong><span class="datos-publicaciones">Miercoles 9 de Marzo del 2022</span>
                </p>
                <p class="parrafo-post">
                    ¿Cuáles son los mejores programas y aplicaciones para el diseño 
                    de coches por ordenador? Lista 2022
                    
                </p> <br>

                <a href=""class="leer-mas">Leer más...</a> &nbsp; &nbsp; <!--&nbsp es para rellenar algo sin contenido-->
                <span class="num-comentarios"> 12 comentarios</span>
            </article>
            <article class="post">
                <a href="" class="enlace-post">
                    <h2 class="titulo-post">Animatronicos..</h2>
                </a>
                <img src="modelados/FOXY.png" class="img-post">
                <p>
                    <strong>Por:</strong><span class="datos-publicaciones">Miguel Alejandre</span>
                    &nbsp; &nbsp;
                    <strong>Fecha: </strong><span class="datos-publicaciones">Viernes 4 de Marzo del 2022</span>
                </p>
                <p class="parrafo-post">
                    Las dos formas principales de crear modelos 3D. Aunque hay varias formas de crear modelos 3D,
                     la mayoría se reducen a dos métodos básicos: crear un modelo en un software
                     de modelado 3D o utilizar un objeto del mundo real y convertirlo en un modelo digital mediante un escáner 3D...
                </p><br>

                <a href=""class="leer-mas">Leer más...</a> &nbsp; &nbsp;
                <span class="num-comentarios"> 12 comentarios</span>
            </article>
            <article class="post">
                <a href="" class="enlace-post">
                    <h2 class="titulo-post">¿Que software de edición usar este 2022?</h2>
                </a>
                <img src="modelados/Living Room Scene 3D Model.jpg" class="img-post">
                <p>
                    <strong>Por:</strong><span class="datos-publicaciones">Miguel Alejandre</span>
                    &nbsp; &nbsp;
                    <strong>Fecha: </strong><span class="datos-publicaciones">Jueves 3 de Marzo del 2022</span>
                </p>
                <p class="parrafo-post">
                    El modelado 3D consiste en utilizar software para crear una representación
                    matemática de un objeto o forma tridimensional. El objeto creado se denomina 
                    modelo 3D y se utiliza en distintas industrias.
                    El modelado 3D consiste en utilizar software para crear una representación
                    matemática de un objeto o forma tridimensional. El objeto creado se denomina 
                    modelo 3D y se utiliza en distintas industrias.
                </p><br>

                <a href=""class="leer-mas">Leer más...</a> &nbsp; &nbsp;
                <span class="num-comentarios"> 12 comentarios</span>
            </article>
            <article class="post">
                <a href="" class="enlace-post">
                    <h2 class="titulo-post">Blender o Cinema4D ?</h2>
                </a>
                <img src="modelados/dibujo.jpg" class="img-post">
                <p>
                    <strong>Por:</strong><span class="datos-publicaciones">Miguel Alejandre</span>
                    &nbsp; &nbsp;
                    <strong>Fecha: </strong><span class="datos-publicaciones">Miercoles 2 de Marzo del 2022</span>
                </p>
                <p class="parrafo-post">
                    Para empezar, debemos considerar la especialidad de cada uno de los programas. Por un lado,
                    Blender es considerado como el programa ideal para crear videojuegos,
                    mientras que, Cinema 4D es conocido como un software para modelar en 3D con resultados increíbles
                </p><br>

                <a href=""class="leer-mas">Leer más...</a> &nbsp; &nbsp;
                <span class="num-comentarios"> 12 comentarios</span>
            </article>
            <article class="post">
                <a href="" class="enlace-post">
                    <h2 class="titulo-post">Eliminación de ruido rapido y facil...</h2>
                </a>
                <img src="modelados/Living Room Scene 3D Model.jpg" class="img-post">
                <p>
                    <strong>Por:</strong><span class="datos-publicaciones">Miguel Alejandre</span>
                    &nbsp; &nbsp;
                    <strong>Fecha: </strong><span class="datos-publicaciones">Martes 1 de Marzo del 2022</span>
                </p>
                <p class="parrafo-post">
                    La eliminación de ruido filtra la imagen resultante utilizando información
                    (conocida como pases de características) recopilada
                    durante el renderizado para eliminar el ruido,
                    al tiempo que conserva los detalles visuales lo mejor posible.
                </p>

                <a href=""class="leer-mas">Leer más...</a> &nbsp; &nbsp;
                <span class="num-comentarios"> 12 comentarios</span>
            </article>
            

            <div id="paginacion">
                <p>Anteriores publicaciones &nbsp; &nbsp;<a href="" class="enlace-paginacion">Siguientes publicaciones</a></p>
            </div>
        </section>


        <section id="sidebar"></section>

</body>
</html>    