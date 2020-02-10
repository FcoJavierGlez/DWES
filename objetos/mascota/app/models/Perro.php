<?php
namespace app\models;
class Perro
{
    private $_color;
    private $_nombre;
    private $_habilidad;
    private $_sociabilidad;

    public function __construct($nombre, $color) {
        $this->_color = $color;
        $this->_nombre = $nombre;
        $this->_habilidad = 0;
        $this->_sociabilidad = 5;
    }

    public function entrenar() {
        echo "<br/>Dar la pata<br/>";
        if ($this->_habilidad < 100)
            $this->_habilidad++;
    }

    public function darPata() {
        return ($this->_habilidad > 5) ? "<br/>Levanta la pata<br/>": "<br/>¿Cómo?<br/>";
    }
}
?>