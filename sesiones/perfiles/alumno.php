<?php
    /**
     * 
     * 
     * @author Fco Javier González Sabariego
     */
    session_start();    //Iniciamos sesión

    //Incluimos ficheros
    include "config/config.php";
    include "include/funciones.php";
    include "include/constantes.php";

    //Comprobamos si estamos logeados correctamente o redirigimos a index.php
    if ($_SESSION['perfil']=="Invitado") 
        header('Location:index.php');

    //Si procedemos del botón de salir (deslogeo de cuenta) destruimos variables cerramos sesion y regeneramos una nueva:
    if (isset($_POST['salir'])) {
        session_unset();
        session_destroy();
        session_start();
        session_regenerate_id();
        header('Location:index.php');
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Fco Javier González Sabariego">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $TITLE; ?></title>
</head>
<body>
    <header>
        <?php include "include/header.php";?>
    </header>
    <nav class="menu">
        <?php 
            echo "<ul>";
            for ($i=0; $i<sizeof($opcionesMenu[$_SESSION['perfil']]); $i++) { 
                if ($opcionesMenu[$_SESSION['perfil']][$i]['script']=="index") 
                    echo "<li><a href=".strtolower($opcionesMenu[$_SESSION['perfil']][$i]['script']).".php".">Home</a></li>";
                else 
                    echo "<li><a href=".strtolower($opcionesMenu[$_SESSION['perfil']][$i]['script']).".php".">".
                    $opcionesMenu[$_SESSION['perfil']][$i]['script']."</a></li>";
            }
            echo "</ul>";
        ?>
    </nav>
    <main>
        <?php include "include/info_login.php"; ?>
        <h2>Acceso alumnos</h2>
    </main>
    <aside></aside>
    <footer>
        <?php include "include/footer.php"; ?>
    </footer>
</body>
</html>