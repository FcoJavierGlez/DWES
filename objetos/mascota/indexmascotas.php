<?php
    /* require_once "app/models/Perro.php";
    require_once "app/models/Persona.php"; */

    /* require_once "vendor/composer/autoload_psr4.php"; */
    require_once "vendor/autoload.php";

    use App\models\Perro;
    use App\models\Persona;

    $perro = new Perro("Negro", "Mastín");

    $perro->entrenar();
    echo $perro->darPata();
    $perro->entrenar();
    echo $perro->darPata();
    $perro->entrenar();
    echo $perro->darPata();
    $perro->entrenar();
    echo $perro->darPata();
    $perro->entrenar();
    echo $perro->darPata();
    $perro->entrenar();
    echo $perro->darPata();
    $perro->entrenar();
    echo $perro->darPata();
?>