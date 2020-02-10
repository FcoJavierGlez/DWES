<?php
    /**
     * @author Fco Javier González Sabariego
     */

    include "include/funciones.php";

    session_start();
    
    if (isset($_POST['salir'])) {
        session_unset();
        session_destroy();
        session_start();
        session_regenerate_id();
    }
    
    $vUsuario="";
    $psw="";
    $procesaFormulario=true;

    //Si no existe la sesión la creamos
    if (!isset($_SESSION['aut'])) {
        $_SESSION['aut'] = false;
        $_SESSION['user'] = "invitado";
    }

    if (isset($_POST['enviar'])) {
        $vUsuario=limpiarDatos($_POST['user']);
        $psw=limpiarDatos($_POST['psw']);
        if (empty($vUsuario) || empty($psw)) {
            //Se piden campos obligatorios
        }
        //validamos el login
        if(login($vUsuario,$psw)) {
            $_SESSION['aut'] = true;
            $_SESSION['user'] = $_POST['user'];
        }
    }
    
    echo "Usted está logeado como: <b>".$_SESSION['user']."</b>";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php include "config/constantes.php"; echo $TITLE_AUT;?></title>
</head>
<body>
    <header></header>
    <nav>
        <?php 
            if ($_SESSION['aut']) {
                include "include/nav.php";
                include "include/cerrar_sesion.php";
            } 
            else include "include/formulario_login.php";
        ?>
    </nav>
    <body>
        
    </body>
</body>
</html>