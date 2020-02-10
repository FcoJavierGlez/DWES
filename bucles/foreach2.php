<?php
/**
 * Cuenta las horas trabajadas en una semana y tanto el día como la jornada que más has trabajado.
 * 
 * @author Fco Javier Glez Sabariego
 * @since 01/10/2019
 */

    $trabajado=0;
    $maximo=0;
    $diaMasTrabajado="";
    $jornadaMasTrabajada="";
    
    $jornada=array("Lunes"=>array("Mañana"=>4,"Tarde"=>4),
                    "Martes"=>array("Mañana"=>3,"Tarde"=>5),
                    "Miercoles"=>array("Mañana"=>4,"Tarde"=>1),
                    "Jueves"=>array("Mañana"=>6,"Tarde"=>2),
                    "Viernes"=>array("Mañana"=>9,"Tarde"=>0));
    
    echo "<pre>";
    print_r($jornada);
    echo "</pre>";
    
    foreach ($jornada as $indice => $indice2) {
        foreach ($indice2 as $turno => $horas) {
            $trabajado+=(int)$horas;
            if ($maximo<$horas) {
                $maximo=$horas;
                $jornadaMasTrabajada=$turno;
                $diaMasTrabajado=$indice;
            }
        }
    }

    echo "Horas trabajadas esta semana: $trabajado.<br/>";
    echo "El día que más has trabajado fue el $diaMasTrabajado en el turno de $jornadaMasTrabajada, trabajaste $maximo"."h en dicho turno.";

    echo "<br/><a href="."../verCodigo.php?src=".str_replace("&bsol;","",__FILE__)."><button>Ver código</button></a>";
?>