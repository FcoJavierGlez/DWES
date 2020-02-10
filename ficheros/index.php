<?php
    /**
     * @author Fco javier González Sabariego.
     */
    $file=fopen("alumnos.txt","r");
    $i=0;

    if ($file) {
        while (($line = fgets($file)) !== false) {
            if ($i>8) {
                echo $line."<br/>";
            }
            $i++;
        }
    } else {
        echo "El fichero no pudo ser abierto.";
    }
    

?>