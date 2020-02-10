<?php
    $nombre = "Fco Javier";
    $apellidos = "González Sabariego";
    $edad = "33 años";

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Nombre:</th>";
    echo "<td>$nombre</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Apellidos:</th>";
    echo "<td>$apellidos</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Edad:</th>";
    echo "<td>$edad</td>";
    echo "</tr>";
    echo "</table>";
    
    echo "<br/><a href="."verCodigo.php?src=".str_replace("&bsol;","",__FILE__).">Ver código</a>";

?>