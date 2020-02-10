<?php
    /**
     * Muestra una paleta de colores.
     * 
     * @author Fco Javier González Sabariego.
     * @since 30/09/2019
     */

    echo "<table border='1'>";
    echo "<tr><td colspan=\"18\"><b>Paleta de colores</b></td></tr>";
    for ($i=0; $i<=255; $i+=15) {
        for ($j=0; $j <= 255; $j+=15) {
            echo "<tr>";
            for ($k=0; $k <= 255; $k+=15) {
                //echo "<tr><td bgcolor=\"#dechex($i).dechex($j).dechex($k)\">".dechex($i).dechex($j).dechex($k)."</td></tr>";
                $rgb=convertDecHexa($i).convertDecHexa($j).convertDecHexa($k);
                echo "<td bgcolor=\"#$rgb\">".$rgb."</td>";
            }
            echo "</tr>";
        }
    }
    echo "</table>";
    
    
    echo "<br/><a href="."../verCodigo.php?src=".str_replace("&bsol;","",__FILE__)."><button>Ver código</button></a>";
    
    /**
     * Convierte el número de entrada (en base decimal) en un número en base hexadecimal.
     */
    function convertDecHexa($valor) {
        $resultado="";
        $cifra=["0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F"];
        if ($valor==0) $resultado.=(string)($valor);
        while ($valor>0) {
            $resultado.=$cifra[$valor%16];
            $valor=(int)($valor/16);
        }
        return (strlen($resultado)==1) ? strrev($resultado.="0") : strrev($resultado);
    }

?>