<?php
/**
 * Muestra enlaces diferentes para cada usuario diferente.
 * 
 * @author Fco Javier González Sabariego
 */

    $user="jorge";
    $password="194666";

    

    if ($user=="javi" && $password=="1234") {
        echo "Está logeado como \"$user\".<br/>";
        echo "<a href='#'>enlace 1</a><br/>";
        echo "<a href='#'>enlace 2</a><br/>";
        echo "<a href='#'>enlace 3</a><br/>";
        echo "<a href='#'>enlace 4</a><br/>";
    }
    elseif ($user=="mcarmen" && $password=="9455") {
        echo "Está logeado como \"$user\".<br/>";
        echo "<a href='#'>enlace 5</a><br/>";
        echo "<a href='#'>enlace 6</a><br/>";
    }
    elseif ($user=="jorge" && $password=="194666") {
        echo "Está logeado como \"$user\".<br/>";
        echo "<a href='#'>enlace 1</a><br/>";
        echo "<a href='#'>enlace 4</a><br/>";
        echo "<a href='#'>enlace 7</a><br/>";
        echo "<a href='#'>enlace 8</a><br/>";
        echo "<a href='#'>enlace 9</a><br/>";
    }
    else {
        echo "El usuario o la contraseña son incorrectos.";
    }

    echo "<br/><a href="."../verCodigo.php?src=".str_replace("&bsol;","",__FILE__)."><button>Ver código</button></a><br/>";

?>