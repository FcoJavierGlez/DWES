<?php
    /**
     * Declaración de un objeto:
     * $objeto = new Clase();
     */

    /* require_once "class/Persona.php"; */
    require_once "class/Alumno.php";
    require_once "class/Preferencia.php";
    require_once "class/Usuario.php";

    /* $alumno1 = new Alumno("Juan", "Romero", "García");
    $alumno1->saluda(); */

    /* $clase = 'Persona';
    $alumno2 = new $clase;
    $alumno2->saluda(); */

    Preferencia::init();

    echo "Timezone: ".Preferencia::$timezone."<br/>";
    echo "Language: ".Preferencia::$language."<br/>";
    echo "Music: ".Preferencia::$music."<br/>";
    echo "Color: ".Preferencia::$color."<br/>";

    $user = new Usuario("Paquito");

    $user->setPassword("admin","123456");
?>