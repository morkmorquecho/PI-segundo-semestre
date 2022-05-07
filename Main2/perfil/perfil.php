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

$usuario = $_SESSION["usuario"]; //guardo el usuario llamando a la variable global 
$fotoPerfil = "../img/$usuario/perfil.jpg"; //despues lo inserto en la direccion de la imagen para usarla como referencia

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
                    <li><a href="../paginacion.php" class="enlace">paginacion</a></li> 
                    <li><a href="" class="enlace">Foros</a></li>
                    <li><a href="perfil.php" class="enlace"> perfil</a>
                    <li><a href="../sesiones/CerrarSesion.php">Cerrar Sesion</a></li>
                </ul>
            </div>
        </div>
    </header> 

        <section id="">
            <img src="<?php echo "$fotoPerfil"   ?>" height="300"  />
            <h1><?php echo "$_SESSION[usuario]" ?></h1>

            <form action="CambiarFoto.php" method="post" enctype="multipart/form-data">
            Cambiar foto de Perfil: <input name="archivo" type="file" accept=".jpg, .jpeg, .png" required/>
            <input type="submit" name="subir" value="subir"/> 
            </form>
        </section> 
        
        <section id="">
            <h2> MIS PROYECTOS</h2>
            <form action="SubirFoto.php" method="post" enctype="multipart/form-data">            
            agrega tus fotos <input name="archivo" id="archivo" type="file" accept=".jpg, .jpeg, .png" required/> 
            <input type="submit" name="subir" value="subir"/> 
            </form><br>

                <?php
                include("../sesiones/conexion.php");
                
                mysqli_set_charset($conexion, "utf8");

                $consulta = "SELECT * FROM proyectos WHERE usuario='$usuario'"; //selecciono tabla y usuario

                $resultados = mysqli_query($conexion, $consulta);

                while ($fila = mysqli_fetch_row($resultados)){
                ?>
                <tr>
                    <td><img src="  <?php echo $fila[2]?>" width="120"></td> 
                </tr>
                <?php
                }
                ?>

                <?php
                if($_SESSION["usuario"] == "admi"){
                  
                    echo "<a href= '../noticias/formularioNews.php'> subir noticias. </a></div>";
                }
                ?>
        </section>
    </header>
</body>
</html>
