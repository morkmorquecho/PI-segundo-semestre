<!DOCTYPE html>
<html>

	<head>
		<title>Noticias</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/estiloNoticias.css?1.0" media="all">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<header>


		<div>
            <figure>
                <!--<img src="modelados/blasterblog.png" alt="logotipo de blasterblog" width="120" height="60" >-->
            </figure>
        </div>    
        <div id= "encabezado">
            <a href="../index.php" id="logo" >BlasterBlog</a></body><br><br>
            <div id="menu">
            <ul>
                <li><a href="../index.php" class="active-menu">Inicio</a></li>
                <li><a href="../paginacion.php" class="enlace">paginacion</a></li>
                <li><a href="noticias.php" class="enlace">Noticias</a></li>
                <li><a href="registro.html" class="enlace">Registro</a></li>
                <li><a href="IniciarSesion.html" class="enlace">Acceder</a></li>

            </ul>
        </div>
    </div>
	</header>
<br>
<!--######################CONTENEDOR DE ARTICULOS DESTACADOS#################### -->

    <div class="container">
        <div class="row mb-2">
            <div class="col-12 text-center pt-3">
                
            </div>
        </div>
        
        <!--CODIGO DE INICIO NOTICIAS-->
        <div class="row">
            <div class="col-12 pb-5">
                <!--INICIO SECTION-->
                <section class="row">
                    <!--Start slider news-->
                    <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
                        <div id="featured" class="carousel slide carousel" data-ride="carousel">
                            <!--dots navigate-->
                            <ol class="carousel-indicators top-indicator">
                                <li data-target="#featured" data-slide-to="0" class="active"></li>
                                <li data-target="#featured" data-slide-to="1"></li>
                                <li data-target="#featured" data-slide-to="2"></li>
                                <li data-target="#featured" data-slide-to="3"></li>
                            </ol>
                            
                            <!--carousel inner-->
                            <div class="carousel-inner">
                                <!--Item slider-->
                                <div class="carousel-item active">
                                    <div class="card border-0 rounded-0 text-light overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_left-cover-1 image-wrapper">
                                                <a href="../articulosNoticias/articuloDestacado1.html">
                                                    <img class="img-fluid w-100" src="cuadronoticias.jpg" alt="#">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!--title-->
                                                <a href="../articulosNoticias/articuloDestacado1.html">
                                                    <h2 class="h3 post-title text-white my-1">Las mejores alternativas para Blender</h2>
                                                </a>
                                                <!-- meta title -->
                                                <div class="news-meta">
                                                    <span class="news-author">by <a class="text-white font-weight-bold" href="#">Mauricio</a></span>
                                                    <span class="news-date">Abr 26, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--DESPLAZAMIENTO DE ARTICULOS (JS)-->
                                <div class="carousel-item">
                                    <div class="card border-0 rounded-0 text-light overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_left-cover-1 image-wrapper">
                                                <a href="#">
                                                    <img class="img-fluid w-100"
                                                         src="cuadronoticias2.jpg"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!--title-->
                                                <a href="#">
                                                    <h2 class="h3 post-title text-white my-1">Walmart shares up 10% on online sales lift</h2>
                                                </a>
                                                <!-- meta title -->
                                                <div class="news-meta">
                                                    <span class="news-author">by <a class="text-white font-weight-bold" href="#">Jennifer</a></span>
                                                    <span class="news-date">Oct 22, 2019</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--DESPLAZAMIENTO DE ARTICULOS (JS)-->
                                <div class="carousel-item">
                                    <div class="card border-0 rounded-0 text-light overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_left-cover-1 image-wrapper">
                                                <a href="#">
                                                    <img class="img-fluid w-100"
                                                         src="cuadronoticias3.jpg"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!--title-->
                                                <a href="#">
                                                    <h2 class="h3 post-title text-white my-1">Bank chief warns on Brexit staff moves to other company</h2>
                                                </a>
                                                <!-- meta title -->
                                                <div class="news-meta">
                                                    <span class="news-author">by <a class="text-white font-weight-bold" href="#">Jennifer</a></span>
                                                    <span class="news-date">Oct 22, 2019</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--DESPLAZAMIENTO DE ARTICULOS (JS)-->
                                <div class="carousel-item">
                                    <div class="card border-0 rounded-0 text-light overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_left-cover-1 image-wrapper">
                                                <a href="#">
                                                    <img class="img-fluid w-100"
                                                         src="cuadronoticias4.jpg"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!--title-->
                                                <a href="#">
                                                    <h2 class="h3 post-title text-white my-1">The world's first floating farm making waves in Rotterdam</h2>
                                                </a>
                                                <!-- meta title -->
                                                <div class="news-meta">
                                                    <span class="news-author">by <a class="text-white font-weight-bold" href="#">Jennifer</a></span>
                                                    <span class="news-date">Oct 22, 2019</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end item slider-->
                            </div>
                            <!--end carousel inner-->
                        </div>
                        
                        <!--navigation-->
                        <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!--End slider news-->
                    
                    <!--Start box news-->
                    <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
                        <div class="row">
                            <!--news box-->
                            <div class="col-6 pb-1 pt-0 pr-1">
                                <div class="card border-0 rounded-0 text-white overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_right-cover-2 image-wrapper">
                                            <a href="../articulosNoticias/articuloDestacado2.html">
                                                <img class="img-fluid"
                                                     src="cuadronoticias1.jpg"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!-- category -->
                                            <a class="p-1 badge badge-primary rounded-0" href="../articulosNoticias/articuloDestacado2.html">Hardware</a>
    
                                            <!--title-->
                                            <a href="../articulosNoticias/articuloDestacado2.html">
                                                <h2 class="h5 text-white my-1">Mejores PC's para empezar a modelar!</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--news box-->
                            <div class="col-6 pb-1 pl-1 pt-0">
                                <div class="card border-0 rounded-0 text-white overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_right-cover-2 image-wrapper">
                                            <a href="../articulosNoticias/articuloDestacado3.html">
                                                <img class="img-fluid"
                                                     src="cuadronoticias2.jpg"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!-- category -->
                                            <a class="p-1 badge badge-primary rounded-0" href="../articulosNoticias/articuloDestacado3.html">Software</a>
                                            <!--title-->
                                            <a href="../articulosNoticias/articuloDestacado3.html">
                                                <h2 class="h5 text-white my-1">Los mejores programas de modelado de 2022</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--news box-->
                            <div class="col-6 pb-1 pr-1 pt-1">
                                <div class="card border-0 rounded-0 text-white overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_right-cover-2 image-wrapper">
                                            <a href="../articulosNoticias/articuloDestacado4.html">
                                                <img class="img-fluid" src="cuadronoticias3.jpg" alt="#">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!-- category -->
                                            <a class="p-1 badge badge-primary rounded-0" href="../articulosNoticias/articuloDestacado4.html">Creaciones</a>
                                            <!--title-->
                                            <a href="../articulosNoticias/articuloDestacado4.html">
                                                <h2 class="h5 text-white my-1">Trabajos Populares en 3D</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--news box-->
                            <div class="col-6 pb-1 pl-1 pt-1">
                                <div class="card border-0 rounded-0 text-white overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_right-cover-2 image-wrapper">
                                            <a href="../articulosNoticias/articuloDestacado5.html">
                                                <img class="img-fluid"
                                                     src="cuadronoticias4.jpg"
                                                     alt="blog website templates bootstrap">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!-- category -->
                                            <a class="p-1 badge badge-primary rounded-0" href="../articulosNoticias/articuloDestacado5.html">Actualizaciones</a>
                                            <!--title-->
                                            <a href="../articulosNoticias/articuloDestacado5.html">
                                                <h2 class="h5 text-white my-1">Windows 11 no soportará los siguientes programas</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end news box-->
                        </div>
                    </div>
                    <!--End box news-->
                </section>
                <!--END SECTION-->
            </div>
        </div>
        <!--end code-->

<!--##################################################################-->

<section id="principal">
    <section id="publicaciones">
        <article class="post">
            <a href="" class="enlace-post">
                <h2 class="titulo-post">Articulo 1</h2>
            </a>
            <img src="articulocuerpo.png" class="img-post">
            <p>
                <strong>Por:</strong><span class="datos-publicaciones">Jose</span>
                &nbsp; &nbsp;
                <strong>Fecha: </strong><span class="datos-publicaciones">Miercoles 9 de Marzo del 2022</span>
                <a class="p-1 badge badge-primary rounded-0" href="">  Software</a>
            </p>
            <p class="parrafo-post">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mollis vehicula ultrices. 
                Vestibulum hendrerit magna est, ac blandit est ornare non. Nullam ornare blandit leo eu varius. 
                Vivamus ac urna ut mi vestibulum vehicula non eget nisl. Vestibulum eu nunc vestibulum leo 
                ullamcorper semper ac tristique velit. Ut at metus a metus consequat scelerisque. Donec sodales 
                ornare cursus. In gravida ex id molestie faucibus. Morbi tempor ligula quis aliquet efficitur. 
                Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc nisi turpis, porta sit amet 
                ullamcorper nec, ornare at leo. Nullam ultrices consequat viverra. Donec sed bibendum sem, vitae 
                malesuada ligula. Nam pulvinar vulputate volutpat.
                
            </p> <br>

            <a href=""class="leer-mas">Leer Más</a> &nbsp; &nbsp; <!--&nbsp es para rellenar algo sin contenido-->
            <span class="num-comentarios">Comentarios</span>
        </article>
        <article class="post">
            <a href="" class="enlace-post">
                <h2 class="titulo-post">Articulo 2</h2>
            </a>
            <img src="articulocuerpo.png" class="img-post">
            <p>
                <strong>Por:</strong><span class="datos-publicaciones">Luis</span>
                &nbsp; &nbsp;
                <strong>Fecha: </strong><span class="datos-publicaciones">Viernes 4 de Marzo del 2022</span>
                <a class="p-1 badge badge-primary rounded-0" href="">  Actualizaciones</a>
            </p>
            <p class="parrafo-post">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mollis vehicula ultrices. 
                Vestibulum hendrerit magna est, ac blandit est ornare non. Nullam ornare blandit leo eu varius. 
                Vivamus ac urna ut mi vestibulum vehicula non eget nisl. Vestibulum eu nunc vestibulum leo 
                ullamcorper semper ac tristique velit. Ut at metus a metus consequat scelerisque. Donec sodales 
                ornare cursus. In gravida ex id molestie faucibus. Morbi tempor ligula quis aliquet efficitur. 
                Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc nisi turpis, porta sit amet 
                ullamcorper nec, ornare at leo. Nullam ultrices consequat viverra. Donec sed bibendum sem, vitae 
                malesuada ligula. Nam pulvinar vulputate volutpat.
            </p><br>

            <a href=""class="leer-mas">Leer más...</a> &nbsp; &nbsp;
            <span class="num-comentarios">Comentarios</span>
        </article>
        <article class="post">
            <a href="" class="enlace-post">
                <h2 class="titulo-post">Articulo 3</h2>
            </a>
            <img src="articulocuerpo.png" class="img-post">
            <p>
                <strong>Por:</strong><span class="datos-publicaciones">Alejandra</span>
                &nbsp; &nbsp;
                <strong>Fecha: </strong><span class="datos-publicaciones">Jueves 3 de Marzo del 2022</span>
                <a class="p-1 badge badge-primary rounded-0" href="">  Hardware</a>
            </p>
            <p class="parrafo-post">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mollis vehicula ultrices. 
                Vestibulum hendrerit magna est, ac blandit est ornare non. Nullam ornare blandit leo eu varius. 
                Vivamus ac urna ut mi vestibulum vehicula non eget nisl. Vestibulum eu nunc vestibulum leo 
                ullamcorper semper ac tristique velit. Ut at metus a metus consequat scelerisque. Donec sodales 
                ornare cursus. In gravida ex id molestie faucibus. Morbi tempor ligula quis aliquet efficitur. 
                Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc nisi turpis, porta sit amet 
                ullamcorper nec, ornare at leo. Nullam ultrices consequat viverra. Donec sed bibendum sem, vitae 
                malesuada ligula. Nam pulvinar vulputate volutpat.
            </p><br>

            <a href=""class="leer-mas">Leer más...</a> &nbsp; &nbsp;
            <span class="num-comentarios">Comentarios</span>
        </article>
        <article class="post">
            <a href="" class="enlace-post">
                <h2 class="titulo-post">Articulo 4</h2>
            </a>
            <img src="articulocuerpo.png" class="img-post">
            <p>
                <strong>Por:</strong><span class="datos-publicaciones">Pedro</span>
                &nbsp; &nbsp;
                <strong>Fecha: </strong><span class="datos-publicaciones">Miercoles 2 de Marzo del 2022</span>
                <a class="p-1 badge badge-primary rounded-0" href="">  Creaciones</a>
            </p>
            <p class="parrafo-post">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mollis vehicula ultrices. 
                Vestibulum hendrerit magna est, ac blandit est ornare non. Nullam ornare blandit leo eu varius. 
                Vivamus ac urna ut mi vestibulum vehicula non eget nisl. Vestibulum eu nunc vestibulum leo 
                ullamcorper semper ac tristique velit. Ut at metus a metus consequat scelerisque. Donec sodales 
                ornare cursus. In gravida ex id molestie faucibus. Morbi tempor ligula quis aliquet efficitur. 
                Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc nisi turpis, porta sit amet 
                ullamcorper nec, ornare at leo. Nullam ultrices consequat viverra. Donec sed bibendum sem, vitae 
                malesuada ligula. Nam pulvinar vulputate volutpat.
            </p><br>

            <a href=""class="leer-mas">Leer más...</a> &nbsp; &nbsp;
            <span class="num-comentarios">Comentarios</span>
        </article>
        <article class="post">
            <a href="" class="enlace-post">
                <h2 class="titulo-post">Articulo 5</h2>
            </a>
            <img src="articulocuerpo.png" class="img-post">
            <p>
                <strong>Por:</strong><span class="datos-publicaciones">Jose</span>
                &nbsp; &nbsp;
                <strong>Fecha: </strong><span class="datos-publicaciones">Martes 1 de Marzo del 2022</span>
                <a class="p-1 badge badge-primary rounded-0" href="">  Software</a>
            </p>
            <p class="parrafo-post">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mollis vehicula ultrices. 
                Vestibulum hendrerit magna est, ac blandit est ornare non. Nullam ornare blandit leo eu varius. 
                Vivamus ac urna ut mi vestibulum vehicula non eget nisl. Vestibulum eu nunc vestibulum leo 
                ullamcorper semper ac tristique velit. Ut at metus a metus consequat scelerisque. Donec sodales 
                ornare cursus. In gravida ex id molestie faucibus. Morbi tempor ligula quis aliquet efficitur. 
                Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc nisi turpis, porta sit amet 
                ullamcorper nec, ornare at leo. Nullam ultrices consequat viverra. Donec sed bibendum sem, vitae 
                malesuada ligula. Nam pulvinar vulputate volutpat.
            </p>

            <a href=""class="leer-mas">Leer más...</a> &nbsp; &nbsp;
            <span class="num-comentarios">Comentarios</span>
        </article>

    </article>
    <article class="post">
        <a href="" class="enlace-post">
            <h2 class="titulo-post">Articulo 6</h2>
        </a>
        <img src="articulocuerpo.png" class="img-post">
        <p>
            <strong>Por:</strong><span class="datos-publicaciones">Jose</span>
            &nbsp; &nbsp;
            <strong>Fecha: </strong><span class="datos-publicaciones">Martes 1 de Marzo del 2022</span>
            <a class="p-1 badge badge-primary rounded-0" href="">  Actualizaciones</a>
        </p>
        <p class="parrafo-post">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mollis vehicula ultrices. 
            Vestibulum hendrerit magna est, ac blandit est ornare non. Nullam ornare blandit leo eu varius. 
            Vivamus ac urna ut mi vestibulum vehicula non eget nisl. Vestibulum eu nunc vestibulum leo 
            ullamcorper semper ac tristique velit. Ut at metus a metus consequat scelerisque. Donec sodales 
            ornare cursus. In gravida ex id molestie faucibus. Morbi tempor ligula quis aliquet efficitur. 
            Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc nisi turpis, porta sit amet 
            ullamcorper nec, ornare at leo. Nullam ultrices consequat viverra. Donec sed bibendum sem, vitae 
            malesuada ligula. Nam pulvinar vulputate volutpat.
        </p>

        <a href=""class="leer-mas">Leer más...</a> &nbsp; &nbsp;
        <span class="num-comentarios">Comentarios</span>
    </article>

</article>
<article class="post">
    <a href="" class="enlace-post">
        <h2 class="titulo-post">Articulo 7</h2>
    </a>
    <img src="articulocuerpo.png" class="img-post">
    <p>
        <strong>Por:</strong><span class="datos-publicaciones">Jose</span>
        &nbsp; &nbsp;
        <strong>Fecha: </strong><span class="datos-publicaciones">Martes 1 de Marzo del 2022</span>
        <a class="p-1 badge badge-primary rounded-0" href="">  Foros</a>
    </p>
    <p class="parrafo-post">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mollis vehicula ultrices. 
        Vestibulum hendrerit magna est, ac blandit est ornare non. Nullam ornare blandit leo eu varius. 
        Vivamus ac urna ut mi vestibulum vehicula non eget nisl. Vestibulum eu nunc vestibulum leo 
        ullamcorper semper ac tristique velit. Ut at metus a metus consequat scelerisque. Donec sodales 
        ornare cursus. In gravida ex id molestie faucibus. Morbi tempor ligula quis aliquet efficitur. 
        Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc nisi turpis, porta sit amet 
        ullamcorper nec, ornare at leo. Nullam ultrices consequat viverra. Donec sed bibendum sem, vitae 
        malesuada ligula. Nam pulvinar vulputate volutpat.
    </p>

    <a href=""class="leer-mas">Leer más...</a> &nbsp; &nbsp;
    <span class="num-comentarios">Comentarios</span>
</article>
        

        <div id="paginacion">
            <p>Anteriores publicaciones &nbsp; &nbsp;<a href="" class="enlace-paginacion">Siguientes publicaciones</a></p>
        </div>
    </section>

    <footer class="footerNoticias">  
            <ul>
                Universidad de Colima - FIE - Equipo 3 Copyright
            </ul>
    </footer>
</body>
</html>