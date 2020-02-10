<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="autor" content="Fco Javier González Sabariego">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1 style="text-align:center"><u>Ejercicios de PHP</u></h1>
        <h2>Autor: Fco Javier González Sabariego.</h2><br/>
    </header>
    <nav></nav>
    <aside></aside>
    <main>
        <?php
            echo "<h4><u>Ejercicios iniciales</u></h4>";
            echo "<ul>";
            echo "<li><a href='holamundo.php' target='_blank'>Hola mundo</a></li>";
            echo "<li><a href='ejercicio1.php' target='_blank'>Ejercicio 1</a></li>";
            echo "<li><a href='ejercicio2.php' target='_blank'>Ejercicio 2</a></li>";
            echo "</ul>";
            echo "<h4><u>Estructuras de control</u></h4>";
            echo "<ul>";
            echo "<li><a href='control/control1.php' target='_blank'>Compara dos números</a></li>";
            echo "<li><a href='control/control2.php' target='_blank'>Días del mes</a></li>";
            echo "<li><a href='control/control3.php' target='_blank'>Edad</a></li>";
            echo "<li><a href='control/control4.php' target='_blank'>Estaciones</a></li>";
            echo "<li><a href='control/control5.php' target='_blank'>Usuarios</a></li>";
            echo "</ul>";
            echo "<h4><u>Bucles</u></h4>";
            echo "<ul>";
            echo "<li><a href='bucles/bucle1.php' target='_blank'>Números del 1 al 10</a></li>";
            echo "<li><a href='bucles/bucle2.php' target='_blank'>Suma tres primeros números pares</a></li>";
            echo "<li><a href='bucles/bucle3.php' target='_blank'>Tabla de multiplicar del 1 al 10</a></li>";
            echo "<li><a href='bucles/bucle4.php' target='_blank'>Paleta de colores</a></li>";
            echo "<li><a href='bucles/bucle5.php' target='_blank'>Calendario</a></li>";
            echo "<li><a href='bucles/foreach1.php' target='_blank'>Día más trabajado</a></li>";
            echo "<li><a href='bucles/foreach2.php' target='_blank'>Día y jornada más trabajados 2</a></li>";
            echo "</ul>";
            echo "<h4><u>Formularios</u></h4>";
            echo "<ul>";
            echo "<li><a href='formularios/datospersonales.php' target='_blank'>Formulario 1</a></li>";
            echo "<li><a href='formularios/formulario.php' target='_blank'>Formulario 2</a></li>";
            echo "<li><a href='formularios/calendario.php' target='_blank'>Calendario</a></li>";
            echo "<li><a href='formularios/continentes1.php' target='_blank'>Continentes 1</a></li>";
            echo "<li><a href='formularios/continentes2.php' target='_blank'>Continentes 2</a></li>";
            echo "</ul>";
            echo "<h4><u>Funciones</u></h4>";
            echo "<ul>";
            echo "<li><a href='funciones/dni.php' target='_blank'>DNI</a></li>";
            echo "<li><a href='funciones/iniciales.php' target='_blank'>Iniciales</a></li>";
            echo "<li><a href='funciones/contrasena_segura.php' target='_blank'>Contraseña segura</a></li>";
            echo "</ul>";
            echo "<h4><u>Controlador</u></h4>";
            echo "<ul>";
            echo "<li><a href='cordoba/index.php' target='_blank'>Córdoba Ciudad Patrimonio</a></li>";
            echo "</ul>";
            echo "<h4><u>Cookies</u></h4>";
            echo "<ul>";
            echo "<li><a href='cookies/index.php' target='_blank'>Ejemplo 1</a></li>";
            echo "</ul>";
            echo "<h4><u>Sesiones</u></h4>";
            echo "<ul>";
            echo "<li><a href='buscaminas/index.php' target='_blank'>Buscaminas</a></li>";
            echo "</ul>";
            echo "<h4><u>Examen Noviembre</u></h4>";
            echo "<ul>";
            echo "<li><a href='exnoviembre/ejercicio1/index.php' target='_blank'>Horario</a></li>";
            echo "<li><a href='exnoviembre/ejercicio2/index.php' target='_blank'>Test verbos irregulares</a></li>";
            echo "</ul>";
            echo "<h4><u>Examen Diciembre</u></h4>";
            echo "<ul>";
            echo "<li><a href='examenDiciembre/ejercicio1/index.php' target='_blank'>Preferencias noticias</a></li>";
            echo "<li><a href='examenDiciembre/ejercicio2/index.php' target='_blank'>La siete y media</a></li>";
            echo "<li><a href='examenDiciembre/ejercicio3/index.php' target='_blank'>Validación de perfiles</a></li>";
            echo "</ul>";
        ?>
    </main>
    <footer>
        <br><small>Redes sociales del autor:</small><br>
        <a href="https://twitter.com/Fco_Javier_Glez" target="_blank"><img src="images/twitter.png" alt="Enlace a cuenta de Twitter del autor" height="50"></a>
        <a href="https://github.com/FcoJavierGlez" target="_blank"><img src="images/github.png" alt="Enlace a cuenta de GitHub del autor" height="50"></a>
        <a href="https://www.linkedin.com/in/francisco-javier-gonz%C3%A1lez-sabariego-51052a175/" target="_blank"><img src="images/linkedin.png" alt="Enlace a cuenta de Linkedin del autor" height="50"></a>
    </footer>
    
</body>
</html>