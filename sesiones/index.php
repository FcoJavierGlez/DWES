<?php
/**
 * 
 */
session_start();

$procesaFormulario = false;
$vFecha = "";
$vDescripcion = "";

    if (isset($_POST['enviar'])) {
        $procesaFormulario=true;
        /* $vFecha = limpiarDatos($_POST['date']);
        $vDescripcion = limpiarDatos($_POST['desc']); */
        $vFecha = $_POST['date'];
        $vDescripcion = $_POST['desc'];
        if (empty($vFecha)) {
            $msgError = "La fecha no puede estar vacío";
            $clase_error = "clase_error";
            $procesaFormulario = false;
        }
        if (empty($vDescripcion)) {
            $msgError = "La descripción no puede estar vacío";
            $clase_error = "clase_error";
            $procesaFormulario = false;
        }
    }

    //$msgError=

    //Declaramos variables de session:
    if (!isset($_SESSION['tareas'])) {
        $_SESSION['tareas'] = array();
    }

    $tareas = array();

?>
<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Francisco Javier González Sabariego">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sesiones</title>
        <link rel="stylesheet" type="text/css" href="./css/verbos.css">
    </head>
    <body>
        <header></header>
        <nav></nav>
        <main>
            <h1 style="text-align: center"><u>Desarrollo en Entorno Servidor 2019/20</u></h1>
            <h2>Autor: Fco Javier González Sabariego</h2>
            <p><b>Sesiones</b></p>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                Fecha: <input type="text" name="date" value="">
                Descripción: <input type="text" name="desc" value=""><br/>
                <input type="submit" name="enviar">
            </form>
            <?php
                if ($procesaFormulario) {
                    //array_push($_SESSION,);
                    $_SESSION['tareas'][] = 
                        array("fecha"=>$vFecha, "descripcion"=>$vDescripcion);
                        //tareas[0][fecha]
                        //tareas[0][tarea]
                        //tareas[0] = array(fecha=>"01/10/2019",tarea=>"medico")
                    for ($i=0; $i<sizeof($_SESSION['tareas']); $i++) { 
                        echo "<p>Fecha: ".$_SESSION['tareas'][$i]["fecha"]." || Descripción: ".$_SESSION['tareas'][$i]["descripcion"]."</p>";
                    }
                    /* foreach ($_SESSION['tareas'] as $array) {
                        foreach ($array as $indice => $valor) {
                            echo $valor."<br/>";
                        }
                    } */
                    echo "EJEMPLO: ".$_SESSION['tareas'][6]["fecha"]." ".$_SESSION['tareas'][6]["descripcion"];
                }
            ?>
        </main>
        <footer>
        <br><small>Redes sociales del autor:</small><br>
			<a href="https://twitter.com/Fco_Javier_Glez" target="_blank"><img src="../images/twitter.png" alt="Enlace a cuenta de Twitter del autor" height="50"></a>
            <a href="https://github.com/FcoJavierGlez" target="_blank"><img src="../images/github.png" alt="Enlace a cuenta de GitHub del autor" height="50"></a>
			<a href="https://www.linkedin.com/in/francisco-javier-gonz%C3%A1lez-sabariego-51052a175/" target="_blank"><img src="../images/linkedin.png" alt="Enlace a cuenta de Linkedin del autor" height="50"></a>
        </footer>
    </body>
</html>