<?php
class Mascota
{
    private static $totalMascotas = 0;
    private $_nombre;
    //private $_raza;

    public function __construct($nombre) {
        self::$totalMascotas++;
        $this->_nombre = $nombre;
    }

    public static function cantidadMascotas() {
        return self::$totalMascotas;
    }

    public function getNombre() {
        return $this->_nombre;
    }
}
?>