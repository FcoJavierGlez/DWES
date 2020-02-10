<?php
    /**
     * 
     */

    function limpiarDatos($dato) {
        $dato = trim($dato);
        $dato=stripcslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }
?>