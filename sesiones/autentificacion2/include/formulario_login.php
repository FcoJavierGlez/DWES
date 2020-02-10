<?php
    /**
     * 
     */
    echo "<form action=".$_SERVER['PHP_SELF']." method=\"post\">";
    echo "Usuario: <input type=\"text\" value=\"\" name=\"user\">";
    echo "Contraseña: <input type=\"password\" value=\"\" name=\"psw\">";
    echo "<input type=\"submit\" name=\"enviar\">";
    echo "</form>";
?>