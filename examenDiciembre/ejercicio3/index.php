<?php
    /**
     * Examen DWES diciembre 2019. Ejercicio3: Perfiles.
     * 
     * @author Fco Javier González Sabariego
     */

    

    session_start();    //Iniciamos sesión

    //Incluimos ficheros
    include "config/config.php";
    include "include/funciones.php";
    include "include/constantes.php";

    //Definimos usuario y contraseña válidos
    $vUsuario = "";
    $vPsw= "";
    $userRequerido="";
    $pswRequerido = "";
    $claseError = "";

    //Si procedemos del botón de salir (deslogeo de cuenta) destruimos variables cerramos sesion y regeneramos una nueva:
    if (isset($_POST['salir'])) {
        session_unset();
        session_destroy();
        session_start();
        session_regenerate_id();
        header('Location:index.php');
    }

    if (!isset($_SESSION['aut'])) {
        $_SESSION['aut']=false;
        $_SESSION['nombre']="Invitado";
        $_SESSION['perfil']="Invitado";
    }

    //Si accedemos desde el botón de enviar
    if (isset($_POST['enviar'])) {
        if (!empty($_POST['user'])) $vUsuario = limpiarDatos($_POST['user']);   //Comprobamos que el campo del usuario esté relleno
        if (!empty($_POST['user']) && !empty($_POST['psw'])) {                  //Si el usuario y la contraseña están rellenos limpiamos datos
            $vPsw = limpiarDatos($_POST['psw']);
            $userRequerido="";
            $pswRequerido = "";
            $claseError = "";
        } else {                                                                //Si falta algún campo procedemos a cargar las variables con los errores
            if (empty($_POST['user'])) $userRequerido = "Campo requerido (*)";
            if (empty($_POST['psw'])) $pswRequerido = "Campo requerido (*)";
            $claseError = "input_error";
        }
    }

    //Comprobamos que el login sea correcto
    if (login($vUsuario, $vPsw, $usuarios)) {
        $_SESSION['aut'] = true;
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
                    echo "<li><a href=".$_SERVER['PHP_SELF'].$opcionesMenu[$_SESSION['perfil']][$i]['url'].">".
                    $opcionesMenu[$_SESSION['perfil']][$i]['script']."</a></li>";
            }
            echo "</ul>";
        ?>
    </nav>
    <main>
        <?php
            if ($_SESSION['aut']) {                 //Si el login es válido mostramos la información del usuario logeado
                include "include/info_login.php";
                $perfil = $_SESSION['perfil'];
            } else {                                //En caso contrario se muestra de neuvo el formulario mostrando errores y campos requeridos
                echo "<div class=\"login\">Usted está logeado como: ".$_SESSION['nombre']."</div>";
                echo "<form action=".$_SERVER['PHP_SELF']." method=\"post\" class=\"login\">";
                if (isset($_POST['enviar']) && empty($_POST['user'])) $claseError = "input_error";
                else {
                    $claseError = "";
                }
                echo "Usuario:<input type=\"text\" placeholder='$userRequerido' value='$vUsuario' name=\"user\" class=".$claseError.">";
                if (isset($_POST['enviar']) && empty($_POST['psw'])) $claseError = "input_error";
                else $claseError = "";
                echo "Contraseña:<input type=\"password\" placeholder='$pswRequerido' value=\"\" name=\"psw\" class=".$claseError.">";
                echo "<input type=\"submit\" name=\"enviar\">";
                echo "</form>";
                
            }
            if ($_SESSION['aut']) {
                if (isset($_GET['page'])) {
                    if ($_GET['page']=='ej1' && ($_SESSION['perfil']=='Ejercicio1' || $_SESSION['perfil']=='Administrador')) 
                        echo "<h2>Ejercicio 1</h2>";
                    elseif ($_GET['page']=='ej2' && ($_SESSION['perfil']=='Ejercicio2' || $_SESSION['perfil']=='Administrador')) 
                        echo "<h2>Ejercicio 2</h2>";
                }
            }
            
            
        ?>
    </main>
    <aside></aside>
    <footer>
        <?php include "include/footer.php"; ?>
    </footer>
</body>
</html>