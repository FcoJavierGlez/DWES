<?php
    /**
     * Suma los tres primeros números pares.
     * 
     * @author Fco Javier González Sabariego.
     * @since 30/09/2019
     */

    $resultado=0;

    for ($i=2; $i<7; $i++) { 
        if ($i%2==0) {
            echo "$i<br/>";
            $resultado+=$i;
        }
    }

    echo "El resultado de sumar los tres primeros números pares es: $resultado";

    echo "<br/><a href="."../verCodigo.php?src=".str_replace("&bsol;","",__FILE__)."><button>Ver código</button></a>";
?>