<?php
    /**
     * Escribe los números del 1 al 10.
     * 
     * @author Fco Javier González Sabariego.
     * @since 30/09/2019
     */

    for ($i=1; $i<11; $i++) { 
    echo "$i<br/>";
    }

    echo "<br/><a href="."../verCodigo.php?src=".str_replace("&bsol;","",__FILE__)."><button>Ver código</button></a>";
?>