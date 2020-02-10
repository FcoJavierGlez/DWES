<?php
    /**
     * Añade un botón que permite cerrar sesión
     */
    echo "<form action =".$_SERVER['PHP_SELF']." method=\"post\">";
    echo "<input type=\"submit\" name=\"salir\" value=\"Salir\">";
    echo "</form>";
?>