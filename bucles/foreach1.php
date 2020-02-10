<?php
/**
 * Cuenta las horas trabajadas en una semana y el día que más has trabajado.
 * 
 * @author Fco Javier Glez Sabariego
 * @since 01/10/2019
 */

    $trabajado=0;
    $maximo=0;
    $diaMasTrabajado="";
    
    $jornada=array("Lunes"=>3,"Martes"=>8,
        "Miércoles"=>5,"Jueves"=>6,"Viernes"=>2);

    echo "<pre>";
    print_r($jornada);
    echo "</pre>";
    
    foreach ($jornada as $indice => $horas) {
        $trabajado+=(int)$horas;
        if ($maximo<$horas) {
            $maximo=$horas;
            $diaMasTrabajado=$indice;
        }
    }

    echo "Horas trabajadas esta semana: $trabajado.<br/>";
    echo "El día que más has trabajado fue el $diaMasTrabajado, trabajaste $maximo"."h.";

    echo "<br/><a href="."../verCodigo.php?src=".str_replace("&bsol;","",__FILE__)."><button>Ver código</button></a>";


?>