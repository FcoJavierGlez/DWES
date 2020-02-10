<?php

    //Capa de control:
    if(!isset($_POST['enviar'])) {
        header('Location: index.php');
    }

    function limpiarDatos($dato) {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }

    $usuario = limpiarDatos($_POST['user']);
    $psw = limpiarDatos($_POST['psw']);
    $procesaFormulario = false;
    $autentificado = false;

    if (!empty($usuario) && !empty($psw)) {
        $procesaFormulario = true;
    }

    if (!$procesaFormulario) {
        header('Location: index.php?error=1');
    }

    //Procesamos formulario:
    
    if (($usuario == "messi") && ($psw == "ronaldo")) {
        $autentificado = true;
        if (isset($_POST['check'])) {
            setcookie('user', $usuario, time()+36000);
            setcookie('psw', $psw, time()+36000);
        }
    }

?>
<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Francisco Javier González Sabariego">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Verbos irregulares</title>
        <link rel="stylesheet" type="text/css" href="./css/verbos.css">
    </head>
    <body>
        <header></header>
        <nav></nav>
        <main>
            <h1 style="text-align: center"><u>Desarrollo en Entorno Servidor 2019/20</u></h1>
            <h2>Autor: Fco Javier González Sabariego</h2>
            <p><b>Verbos irregulares</b></p>
            <?php
                if ($autentificado) {
                    echo "<p>OK. Acceso autorizado.</p>";
                } else {
                    echo "<p>ERROR. Acceso denegado.</p>";
                }
            ?>
        </main>
        <footer>
        <br><small>Redes sociales del autor:</small><br>
			<a href="https://twitter.com/Fco_Javier_Glez" target="_blank"><img src="../images/twitter.png" alt="Enlace a cuenta de Twitter del autor" height="50"></a>
            <a href="https://github.com/FcoJavierGlez" target="_blank"><img src="../images/github.png" alt="Enlace a cuenta de GitHub del autor" height="50"></a>
			<a href="https://www.linkedin.com/in/francisco-javier-gonz%C3%A1lez-sabariego-51052a175/" target="_blank"><img src="../images/linkedin.png" alt="Enlace a cuenta de Linkedin del autor" height="50"></a>
        </footer>
    </body>
</html>