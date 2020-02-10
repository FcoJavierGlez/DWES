<?php
    /**
     * Imprime el calendario del mes y el año introducidos marcando en verde el día actual según el sistema 
     * y en rojo los domingos y días festivos.
     * 
     * @author Fco Javier González Sabariego.
     * @since 30/09/2019
     */

    $diaSemana=['L','M','X','J','V','S','D'];                   //Lista días de la semana
    $mes=10;                                                    //Mes seleccionado
    $anno=2019;                                                 //Año seleccionado
    $festivos=[12,27];                                          //Días festivos del mes seleccionado
    $diasMes=0;                                                 //Días que posee el mes seleccionado (se asignan en el switch)
    $diaActual=date("d");                                       //Día actual del sistema
    $primerDiaSemana=date("N", mktime(0,0,0,$mes,1,$anno));     //Día de la semana al que corresponde el primer día del mes, Lunes=1 | Domingo=7
    $diaImprimido=1;                                            //El número de día impreso en el calendario

    switch ($mes) {     //Asignamos cuantos días posee el mes
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $diasMes=31;
            break;
        case 2:
            $diasMes=(annoBisiesto($anno)) ? 29 : 28;
            break;        
        case 4:            
        case 6:            
        case 9:            
        case 11:
            $diasMes=30;
            break;
        
    }

    echo "Calendario de $mes/$anno";

    //Imprimimos calendario
    echo "<table border='1'>";
    echo "<tr>";
    for ($i=0; $i<7; $i++) 
        echo "<td>$diaSemana[$i]</td>";
    echo "<tr>";
    for ($i=0; $i<6; $i++) {
        echo "<tr>";
        for ($j=1; $j<8; $j++) {
            if ($diaImprimido==1 && $j<$primerDiaSemana) 
                echo "<td bgcolor=\"#CCCCCC\"></td>"; 
            else {
                if ($diaImprimido<=$diasMes) {
                    if ($diaImprimido==$diaActual) 
                        echo "<td bgcolor=\"#73ff00\">$diaImprimido</td>";
                    else {
                        if ($j==7 || esFestivo($diaImprimido, $festivos)) 
                            echo "<td bgcolor=\"#FF0000\">$diaImprimido</td>";
                        else 
                            echo "<td>$diaImprimido</td>";
                    }
                    $diaImprimido++;
                }
                else 
                    echo "<td bgcolor=\"#CCCCCC\"></td>";
            }
        }
        echo "</tr>";
        if ($diaImprimido>$diasMes) 
            break;
    }
    echo "</table>";

    echo "<br/><a href="."../verCodigo.php?src=".str_replace("&bsol;","",__FILE__)."><button>Ver código</button></a>";


    //Funciones\\

    /**
     * Comprueba si el año introducido como parámetro es bisiesto y devuelve un booleano.
     */
    function annoBisiesto($anno){
        if (($anno%4)!==0 && ($anno%100)!==0) return FALSE;
        elseif (($anno%4)==0 && ($anno%100)!==0) return TRUE;
        elseif (($anno%4)==0 && ($anno%100)==0 && ($anno%400)!==0) return FALSE;
    }
    
    /**
     * Comprueba si el día introducido como parámetro coincide con alguno de los días festivos 
     * introducidos como segundo parámetro y devuelve un booleano.
     */
    function esFestivo($dia,$festivos) {
        for ($i=0; $i<sizeof($festivos); $i++)
            if ($dia==$festivos[$i]) return TRUE;
        return FALSE;
    }
?>