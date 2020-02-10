<?php
    $usuarios = array(
        array('nombre'=>'María',
            'user'=>'EJ1',
            'psw'=>'EJ1',
            'perfil'=>'Ejercicio1'),
        array('nombre'=>'Fco Javier',
            'user'=>'EJ2',
            'psw'=>'EJ2',
            'perfil'=>'Ejercicio2'),
        array('nombre'=>'José',
            'user'=>'ADMIN',
            'psw'=>'ADMIN',
            'perfil'=>'Administrador')
    );

    $opcionesMenu = array(
        'Invitado'=>array(
            array(
                'msg'=>'opc1_pub',
                'script'=>'index'
            )
        ),
        'Ejercicio1'=>array(
            array(
                'msg'=>'opc1_pub',
                'script'=>'index'
            ),
            array(
                'msg'=>'opc2_alu',
                'script'=>'Ejercicio 1',
                'url'=>'?page=ej1'
                /* 'url'=>'../ejercicio1/index.php' */
            )
        ),
        'Ejercicio2'=>array(
            array(
                'msg'=>'opc1_pub',
                'script'=>'index'
            ),
            array(
                'msg'=>'opc3_pro',
                'script'=>'Ejercicio 2',
                'url'=>'?page=ej2'
                /* 'url'=>'../ejercicio2/index.php' */
            )
        ),
        'Administrador'=>array(
            array(
                'msg'=>'opc1_pub',
                'script'=>'index'
            ),
            array(
                'msg'=>'opc2_alu',
                'script'=>'Ejercicio 1',
                'url'=>'?page=ej1'
                /* 'url'=>'../ejercicio1/index.php' */
            ),
            array(
                'msg'=>'opc3_pro',
                'script'=>'Ejercicio 2',
                'url'=>'?page=ej2'
                /* 'url'=>'../ejercicio2/index.php' */
            )
        )
    );

?>
