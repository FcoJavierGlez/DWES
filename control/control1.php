<?php
    /*
        Dados dos números guardados en variables compararlos y decir cual de los dos es mayor.

        @author Fco Javier González Sabariego
    */
    
    $num1 = 3;
    $num2 = 7;

    echo "Número 1 = $num1 || Número 2 = $num2<br/>";
    if ($num1>$num2)
        echo "$num1 es mayor que $num2";
    elseif ($num1<$num2)
        echo "$num2 es mayor que $num1";
    else
        echo "$num1 es igual que $num2";
    
        echo "<br/><a href="."../verCodigo.php?src=".str_replace("&bsol;","",__FILE__)."><button>Ver código</button></a><br/>";
    
 ?>