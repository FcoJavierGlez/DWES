<?php
/**
 * Ejercicio 4. Cabecera en función de la estación del año.
 * 
 * @author Fco Javier González Sabariego.
 */
    $dia=30;
    $mes=9;
    $anno=2019;

    if (($mes==12 && $dia>=21) || ($mes<3 || ($mes==3 && $dia<22))) {
        echo "<img src='images/invierno.jpg'>";
    }
    elseif ((($mes>=3 && $mes<6) && $dia>=22) || ($mes<6 || ($mes==6 && $dia<21))) {
        echo "<img src='images/primavera.jpg'>";
    }
    elseif ((($mes>=6 && $mes<9) && $dia>=21) || ($mes<9 || ($mes==9 && $dia<22))) {
        echo "<img src='images/verano.jpg'>";
    }
    else
    echo "<img src='images/otonno.jpg'>";

     
    echo "<br/>La fecha es $dia/$mes/$anno";

    echo "<br/><a href="."../verCodigo.php?src=".str_replace("&bsol;","",__FILE__)."><button>Ver código</button></a><br/>";

        /*
            Primavera=22/03
            Verano=21/06
            Otoño=22/09
            Invierno=21/12
         */
?>