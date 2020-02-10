<?php
    /**
     * 
     */
    $menu = array("Home", "Privado");
    $enlaces = array("index.php", "privado.php");
    
    for ($i=0; $i<sizeof($menu); $i++) { 
        echo "<a href=".$enlaces[$i].">".$menu[$i]."</a>";
        if ($i!=sizeof($menu)-1) echo " | ";
    }
?>