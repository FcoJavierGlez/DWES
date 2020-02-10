<?php
    /**
     * 
     */

    //session_start();

    //include "config/config.php";

    function limpiarDatos($dato) {
        $dato = trim($dato);
        $dato=stripcslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }

    /**
     * Comprueba que el usuario y contraseña pasadas como parámetros coinciden con el array de
     * usuarios almacenados.
     * 
     * En caso de ser válido, cargamos en la sesión el nombre real del usuario y su perfil, además 
     * de devolver un true;
     * 
     * En caso de no ser válido devolvemos un false.
     */
    function login($user, $psw, $usuarios) {
        for ($i=0; $i<sizeof($usuarios); $i++) { 
            if ($user==$usuarios[$i]['user']) {
                if ($psw==$usuarios[$i]['psw']) {
                    $_SESSION['nombre']=$usuarios[$i]['nombre'];
                    $_SESSION['perfil']=$usuarios[$i]['perfil'];
                    return true;
                } else return false;
            }
        }
        return false;
    }
?>