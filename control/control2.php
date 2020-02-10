<?php
    /**
     * Muestra los días del mes y del año introducidos (almacenados).
     * 
     * @author Fco Javier González Sabariego
    */

    $mes = 2;
    $anno = 2020;

    echo "Mes $mes del año $anno <br/>";

    switch ($mes) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            echo "El mes tiene 31 días.";
            break;
        case 2:
            echo (annoBisiesto($anno)) ? "El mes tiene 29 días.<br/>" : "El mes tiene 28 días.<br/>";
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            echo "El mes tiene 30 días.<br/>";
            break;
    }

    echo "<br/><a href="."../verCodigo.php?src=".str_replace("&bsol;","",__FILE__)."><button>Ver código</button></a><br/>";

    function annoBisiesto($anno){
        if (($anno%4)!==0 && ($anno%100)!==0)
            return FALSE;
        elseif (($anno%4)==0 && ($anno%100)!==0)
            return TRUE;
        elseif (($anno%4)==0 && ($anno%100)==0 && ($anno%400)!==0)
            return FALSE;
    }
 ?>