<?php
    /**
     * 
     */
    require_once "vendor/autoload.php";

    $nombre = ["Misifú", "Pepe", "Stark", "Wonderwoman", "Pulgoso"];
    $mascotas = array(null,null, null, null, null);

    for ($i=0; $i<5; $i++) { 
        $mascotas[$i]=new Mascota($nombre[rand(0,sizeof($nombre)-1)]);
        echo "Ha nacido: ".$mascotas[$i]->getNombre().". Tienes un total de: ".Mascota::cantidadMascotas()." mascotas.<br/>";
    }

?>