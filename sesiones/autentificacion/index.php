<?php
    /**
     * @author Fco Javier González Sabariego
     */

    session_start();
    
    if (isset($_POST['salir'])) {
        session_unset();
        session_destroy();
        session_start();
        session_regenerate_id();
    }
    
    $vUsuario="";
    $procesaFormulario=true;

    //Si no existe la sesión la creamos
    if (!isset($_SESSION['aut'])) {
        $_SESSION['aut'] = false;
        $_SESSION['user'] = "invitado";
    }

    if (isset($_POST['enviar'])) {
        //cabecera
        if($_POST['user']=="cristiano" && $_POST['psw']=="messi") {
            $_SESSION['aut'] = true;
            $_SESSION['user'] = $_POST['user'];
        }
        //Location(privado.php);
    }
    
    echo "Usted está logeado como: <b>".$_SESSION['user']."</b>";
    
    //Si estamos logeados mostramos información:
    if ($_SESSION['aut']) {
        echo "<br/><a href=\"privado.php\" target=\"_blank\">Privado</a>";
        echo "<form action =".$_SERVER['PHP_SELF']." method=\"post\">";
        echo "<input type=\"submit\" name=\"salir\" value=\"Salir\">";
        echo "</form>";
    } else {
        //display formulario;
        echo "<form action=".$_SERVER['PHP_SELF']." method=\"post\">";
        echo "Usuario: <input type=\"text\" value=\"\" name=\"user\">";
        echo "Contraseña: <input type=\"password\" value=\"\" name=\"psw\">";
        echo "<input type=\"submit\" name=\"enviar\">";
        echo "</form>";
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autentificación</title>
</head>
<body>
    <nav></nav>
    <body>
        
    </body>
</body>
</html>