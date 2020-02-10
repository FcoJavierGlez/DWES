<?php
class Usuario
{
    private $_nombre;
    private $_usuario;
    private $_password;
    private static $longMinimaPassword = 6;

    public function __construct($nombre) {
        $this->_nombre = $nombre;
    }

    public static function restriccion() {
        return 'Longitud mínima de clave: '.self::$longMinimaPassword;
    }

    private static function validatePassword($password) {
        return (strlen($password) >= self::$longMinimaPassword);
    }

    public function setPassword($usuario, $password) {
        if (self::validatePassword($password)) {
            $this->_usuario = $usuario;
            $this->_password = $password;
        }
    }
}
?>