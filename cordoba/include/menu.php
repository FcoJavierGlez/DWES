<?php
    /**
     * 
     */
    $opciones = array(
        "Inicio", 
        "La Mezquita", 
        "Casco histórico", 
        "Los Patios", 
        "Medina Azahara", 
        "Sinagoga", 
        "Contacto"
    );
    
    $enlaces = array(
        "index.php", 
        "index.php?page=mezquita", 
        "index.php?page=cascohistorico", 
        "index.php?page=patios", 
        "index.php?page=medinaazahara", 
        "index.php?page=sinagoga", 
        "index.php?page=contacto"
    );

    for ($i=0; $i<sizeof($opciones); $i++) 
        echo "<a href=".$enlaces[$i].">".$opciones[$i]."</a>";
?>