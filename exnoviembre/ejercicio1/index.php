<?php
    /**
     * Ejercicio 1: Horario 2ºDAW 2019/20
     * 
     * @author Fco Javier González Sabariego
     * @since 18/11/2019
     */

    //Incluimos ficheros
    include "config/config.php";
    include "include/constantes.php";

    /**
     * Devuelve la asignatura según el día y la hora que se le pase como parámetro.
     * 
     * Recibe como parámetros el día de la semana, la hora del día y el array del horario
     */
    function imprimeCelda($d, $h, $tablaHorario) {
        foreach ($tablaHorario as $asignatura => $indice) {            
            foreach ($indice["horario"] as $dia) {
                if ($d==$dia["Dia"] && $h==$dia["Hora"])
                    return $asignatura;
            }
        }
    }

    /**
     * Imprime la leyenda con información de las asignaturas y del profesorado
     * 
     * Recibe como parámetro el horario
     */
    function imprimeLeyenda($tablaHorario) {
        foreach ($tablaHorario as $asignatura => $indice) {            
            echo "<b>".$asignatura."</b>: ".$indice['nombre']." => ".$indice['profesor']."<br>";
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Fco Javier González Sabariego">
        <link rel="stylesheet" href="css/style.css">
        <title><?php echo $TITLE; ?></title>
    </head>
    <body>
        <header>
            <?php include "include/header.php";?>
        </header>
        <nav class="menu"></nav>
        <main>
            <h3>Horario:</h3>
            <?php
                //Imprimimos la tabla:
                echo "<table>";

                //Imprimimos los días de la semana Lunes-Viernes:
                echo "<tr class=\"dias\">";
                for ($i=0; $i<sizeof($diasSemana); $i++)  
                    echo "<td><b>".$diasSemana[$i]."</b></td>";
                echo "</tr>";

                //Imprimimos las asignaturas según día y hora:
                for ($hora=1; $hora<7; $hora++) { 
                    echo "<tr>";
                    for ($j=0; $j<sizeof($diasSemana); $j++) { 
                        echo "<td>".imprimeCelda($diasSemana[$j],$hora, $tablaHorario)."</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";

                //Imprimimos la leyenda con información nombre de asignatura y profesorado:
                echo "<h3>Leyenda:</h3>";
                imprimeLeyenda($tablaHorario);
            ?>
        </main><!--  -->
        <footer>
            <?php include "include/footer.php"; ?>
        </footer>
    </body>
</html>