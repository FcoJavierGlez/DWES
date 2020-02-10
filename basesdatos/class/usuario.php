<?php
    require_once('DBAbstractModel.php');
    class Usuario extends DBAbstractModel {
        private static $instancia;
        public static function singleton() {
            if (!isset(self::$instancia)) {
                $miClase = __CLASS__;
                self::$instancia = new $miClase;
            }
            return self::$instancia;
        }

        public function __clone() {
            trigger_error('La clonación no es permitida.', E_USER_ERROR);
        }

        private $nombre;
        private $apellidos;
        private $email;
        private $clave;
        private $id;

        public function get($email='') {
		
            if($email != '') {
            $this->query = "
                SELECT id, nombre, apellidos, email, clave
                FROM usuarios
                WHERE email = :email";
            $this->parametros['email']= $email;	
            $this->get_results_from_query();
            }
            
            if(count($this->rows) == 1) {
                foreach ($this->rows[0] as $propiedad=>$valor) {
                    $this->$propiedad = $valor;
                }
                $this->mensaje = 'Usuario encontrado';
            }
            else {
                $this->mensaje = 'Usuario no encontrado';
            }
        }
    
        # Crear un nuevo usuario
        public function set($user_data=array()) {
            if(array_key_exists('email', $user_data)) {
                $this->get($user_data['email']);
                if($user_data['email'] != $this->email) {
                    foreach ($user_data as $campo=>$valor) {
                        $$campo = $valor;
                    }
                    
                    $this->query = "INSERT INTO usuarios
                                    (nombre, apellidos, email, clave)
                                    VALUES
                                    (:nombre, :apellidos, :email, :clave)";
                    $this->parametros['nombre']= $nombre;
                    $this->parametros['apellidos']= $apellidos;
                    $this->parametros['email']=$email;
                    $this->parametros['clave']=$clave;
                    $this->get_results_from_query();
                    //$this->execute_single_query();
                    $this->mensaje = 'Usuario agregado exitosamente';
                } else {
                    $this->mensaje = 'El usuario ya existe';
                }
            } else {
                $this->mensaje = 'No se ha agregado al usuario';
            }
        }

        # Modificar un usuario
        public function edit($user_data=array()) {
            foreach ($user_data as $campo=>$valor) {
                $$campo = $valor;
            }
            $this->query = "
                UPDATE usuarios
                SET nombre=:nombre,
                apellidos=:apellidos
                WHERE email = :email
                ";
            $this->parametros['nombre']=$nombre;
            $this->parametros['apellidos']=$apellidos;
            $this->parametros['email']=$email;
            
            $this->get_results_from_query();
            //$this->execute_single_query();
            $this->mensaje = 'Usuario modificado';
        }

        # Eliminar un usuario
        public function delete($email='') {
            $this->query = "
                DELETE FROM usuarios
                WHERE email = :email
                ";
            $this->parametros['email']=$email;
            $this->get_results_from_query();
            $this->mensaje = 'Usuario eliminado';
        }

        # Método constructor
        function __construct() {
            $this->db_name = 'book_example';
        }
        
        # Método destructor del objeto
        function __destruct() {
        $this->conn = null;
        }

    }
?>