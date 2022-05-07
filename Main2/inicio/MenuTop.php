<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<?php
$usuario = $_SESSION["usuario"]; //guardo el usuario llamando a la variable global 
$fotoPerfil = "img/$usuario/perfil.jpg"; ?>

        <header>        
                <div id="menu">
                    <ul>
                        <li><a href="index.php" class="active-menu">Inicio</a></li>
                        <li><a href="paginacion.php" class="enlace">paginacion</a></li>
                        <li><a href="sesiones/noticias.php" class="enlace">noticias</a></li>
                        <li><a href="perfil/perfil.php"  class="enlace"> <?php echo "$_SESSION[usuario]" ?> </a></li> 
                        <li><a href="perfil/perfil.php"  class="enlace"> <img src="<?php echo $fotoPerfil ?>" height="25"> </a></li>
                    
                    </ul>
                </div>
            </div>
        </header>   
</form> 
</body>     
</html>
  

