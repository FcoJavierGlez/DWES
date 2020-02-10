<?php
    $hEntrada = 5;
    $hSalida = 7.5;
    $tiempo = round($hSalida-$hEntrada, 0, PHP_ROUND_HALF_UP);

    $precio = 1.10;             //
    $paga = 20;                 //El usuario paga

    $total = $tiempo*$precio;   //Total a pagar
    
    $diferencia = ($paga-$total)*100;
    $devolucion = $paga-$total;

    $billeteDiez = round(($diferencia-$diferencia%1000)/1000);    
    $diferencia -= $billeteDiez*1000;

    $billeteCinco = round(($diferencia-$diferencia%500)/500);    
    $diferencia -= $billeteCinco*500;

    $monedaDos = round(($diferencia-$diferencia%200)/200);    
    $diferencia -= $monedaDos*200;

    $monedaUno = round(($diferencia-$diferencia%100)/100);    
    $diferencia -= $monedaUno*100;

    $monedaCincuenta = round(($diferencia-$diferencia%50)/50);    
    $diferencia -= $monedaCincuenta*50;

    $monedaVeinte = round(($diferencia-$diferencia%20)/20);    
    $diferencia -= $monedaVeinte*20;

    $monedaDiez = round(($diferencia-$diferencia%10)/10);    
    $diferencia -= $monedaDiez*10;

    $monedaCinco = round(($diferencia-$diferencia%5)/5);    
    $diferencia -= $monedaCinco*5;

    $monedaDos = round(($diferencia-$diferencia%2)/2);    
    $diferencia -= $monedaDos*2;

    $monedaUn = round(($diferencia-$diferencia%1)/1);    
    $diferencia -= $monedaUn*1;

    echo __FILE__;

    echo "<table border='1'>";
        echo "<tr>";
            echo "<th>";
                echo "Hora de entrada:";
            echo "</th>";
            echo "<td>";
                echo "$hEntrada";
            echo "</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<th>";
                echo "Hora de salida:";
            echo "</th>";
            echo "<td>";
                echo "$hSalida";
            echo "</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<th>";
                echo "Total horas:";
            echo "</th>";
            echo "<td>";
                echo "$tiempo";
            echo "</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<th>";
                echo "Precio/hora:";
            echo "</th>";
            echo "<td>";
                echo "$precio €";
            echo "</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<th>";
                echo "Total a pagar:";
            echo "</th>";
            echo "<td>";
                echo "$total €";
            echo "</td>";
        echo "</tr>";
            echo "<tr>";
            echo "<th>";
                echo "Pagado:";
            echo "</th>";
            echo "<td>";
                echo "$paga €";
            echo "</td>";
        echo "<tr>";
            echo "<th>";
                echo "Devolución:";
            echo "</th>";
            echo "<td>";
                echo "$devolucion €";
            echo "</td>";
        echo "</tr>";
        echo "<tr>";//
            echo "<th rowspan='11'>";
                echo "Cambio:";
            echo "</th>";
            echo "<tr>";
                echo "<td>";
                    echo "Billetes de 10€ x$billeteDiez";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>";
                    echo "Billetes de 5€ x$billeteCinco";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>";
                    echo "Monedas de 2€ x$monedaDos";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>";
                    echo "Monedas de 1€ x$monedaUno";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>";
                    echo "Monedas de 50c x$monedaCincuenta";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>";
                    echo "Monedas de 20c x$monedaVeinte";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>";
                    echo "Monedas de 10c x$monedaDiez";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>";
                    echo "Monedas de 5c x$monedaCinco";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>";
                    echo "Monedas de 2c x$monedaDos";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>";
                    echo "Monedas de 1c x$monedaUn";
                echo "</td>";
            echo "</tr>";
        echo "</tr>";
    echo "</table>";

    echo "<br/><a href="."verCodigo.php?src=".str_replace("&bsol;","",__FILE__).">Ver código</a>";
    
?>