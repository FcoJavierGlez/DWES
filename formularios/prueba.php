<?php
    $importaIndice="1,2,3";
    $importaColumnas="3,2|2,3|0,1|2,1|1,0";

    $arrayColumnas=cargaColumnas($importaColumnas,5);
    

    echo $importaIndice."<br/><br/>";
    //echo substr($importaIndice,2,1);
    probando($importaIndice);

    imprimeTabla($arrayColumnas,5);
    //echo (substr_compare($importaIndice,",",2,1)==0) ? "verdad" : "mentira";

    echo columnaVerbo(0,2,$arrayColumnas);


    function probando($importaIndice) {
        $cadena="";
        for ($i=0; $i<strlen($importaIndice); $i++) { 
            if(substr($importaIndice,$i,1)!="," && $i==strlen($importaIndice)-1) {
                $cadena.=(string)substr($importaIndice,$i,1);
                echo (int) $cadena."<br/>";
                $cadena="";
            } else if (substr($importaIndice,$i,1)!=",")
                $cadena.=(string)substr($importaIndice,$i,1);
            else {
                echo (int) $cadena."<br/>";
                $cadena="";
            }
        }
    }

    function cargaColumnas($importaColumnas){
        $arrayColumnas=array();
        $cadena="";
        array_push($arrayColumnas,array());
        $i=0;
        for ($j=0; $j<strlen($importaColumnas); $j++) { 
            if(substr($importaColumnas,$j,1)==",") {
                array_push($arrayColumnas[$i],(int)$cadena);
                $cadena="";
            }
            else if (substr($importaColumnas,$j,1)=="|"){
                array_push($arrayColumnas[$i],(int)$cadena);
                $cadena="";
                array_push($arrayColumnas,array());
                $i++;
            } else if ($j==strlen($importaColumnas)-1) {
                $cadena.=substr($importaColumnas,$j,1);
                array_push($arrayColumnas[$i],(int)$cadena);
            }
            else 
                $cadena.=substr($importaColumnas,$j,1);
        }
        return $arrayColumnas;
    }

    function imprimeTabla($arrayColumnas,$numero) {
        echo "<table border='1'>";
        for ($i=0; $i<$numero; $i++) { 
            echo "<tr>";
            for ($j=0; $j<sizeof($arrayColumnas[$i]); $j++) { 
                echo "<td>".$arrayColumnas[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    function columnaVerbo($indice,$columna,$arrayColumnas) {
        for ($i=0; $i<sizeof($arrayColumnas[$indice]); $i++) { 
            if($columna==$arrayColumnas[$indice][$i])
                return $i;
        }
        return 0;
    }
?>