<?php
    $festivos=[12,17,20];
    $dia=11;

    echo "El día es $dia, ";
    if (esFestivo($dia,$festivos)) {
        echo "es festivo.";
    }
    else {
        echo "no es festivo.";
    }

    function esFestivo($dia,$festivos) {
        for ($i=0; $i<sizeof($festivos); $i++) { 
            if ($dia==$festivos[$i]) {
                return TRUE;
            }
        }
        return FALSE;
    }

    $diaSemana=date("N", mktime(0,0,0,12,1,2019));
    $diaNumerico=mktime(0,0,0,12,1,2019);

    echo "<br/>$diaSemana";
    echo "<br/>$diaNumerico";

?>