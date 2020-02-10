<?php
    /**
     * Tabla de multiplicar del 1 al 10.
     * 
     * @author Fco Javier González Sabariego.
     * @since 30/09/2019
     */
    
    for ($i=1; $i<11; $i++) { 
        echo "<table border='1'>";
        echo "<tr><td>Tabla de multiplicar del $i</td></tr>";
        for ($j=1; $j<11; $j++) { 
            $resultado=$j*$i;
            echo "<tr><td>".$j."x$i = $resultado</td></tr>";
        }
        echo "</table>";
    }

    echo "<br/><a href="."../verCodigo.php?src=".str_replace("&bsol;","",__FILE__)."><button>Ver código</button></a>";
?>