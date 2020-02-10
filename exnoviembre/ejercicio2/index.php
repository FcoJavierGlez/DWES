<?php
    /**
     * Ejercicio 2: Nivel de inglés 2ºDAW 2019/20
     * 
     * @author Fco Javier González Sabariego
     * @since 19/11/2019
     */

    //Incluimos ficheros
    include "config/config.php";
    include "include/constantes.php";
    include "include/funciones.php";

    //Iniciamos variable de validación
    $vFormulario = false;
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
            <h3>Nivel de inglés:</h3>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                <?php   //Imprimimos el formulario inicial
                    if (!isset($_POST['enviar']) && !isset($_POST['respuestas'])) {     //Si no hemos enviado nada
                        echo "Nombre: <input type=\"text\" value=\"\" name=\"nombre\"><br/>";
                        echo "Nivel de inglés: ";
                        echo "<select name=\"nivel\">";
    
                        //Imprimimos las opciones del nivel de idioma
                        for ($i=0; $i<sizeof($nivelIdioma); $i++) { 
                            echo "<option value=\"$i\">".$nivelIdioma["$i"]."</option>";
                        }
                        echo "</select>";
                    } else { //Si venimos de enviar el formulario inicial
                        $vFormulario = compruebaNombre($_POST['nombre']);
                        echo "Nivel de inglés: ";
                        echo "<select name=\"nivel\">";
    
                        //Imprimimos las opciones del nivel de idioma según el nivel seleccionado
                        for ($i=0; $i<sizeof($nivelIdioma); $i++) { 
                            if ($_POST['nivel']==$i) echo "<option value=\"$i\" selected>".$nivelIdioma["$i"]."</option>";
                            else echo "<option value=\"$i\">".$nivelIdioma["$i"]."</option>";
                        }
                        echo "</select>";
                    }
                ?>
                <input type="submit" name="enviar">
            </form>
            <hr/>
            <?php
                if (isset($_POST['respuestas'])) {  //Si tenemos entrada por post desde las preguntas procesamos el resultado
                    for ($i=0; $i<sizeof($preguntasIngles); $i++) { 
                        imprimePreguntaValidada($preguntasIngles, $i);
                    }
                    echo "<br/><b>".$_POST['nombre']." con tu nivel de inglés ".$nivelIdioma[$_POST['nivel']]." tu puntuación total ha sido de: ".calculaPuntuacion($preguntasIngles)."</b>";
                } elseif ($vFormulario) {   //Si no, si es válido el formulario inicial mostramos las preguntas por primera vez
                    echo "<form action=".$_SERVER['PHP_SELF']." method=\"post\">";
                    for ($i=0; $i<sizeof($preguntasIngles); $i++) { 
                        imprimePregunta($preguntasIngles, $i);
                    }
                    echo "<input type=\"hidden\" name=\"nombre\" value=".$_POST['nombre'].">";
                    echo "<input type=\"hidden\" name=\"nivel\" value=".$_POST['nivel'].">";
                    echo "<input type=\"submit\" value=\"Enviar respuestas\" name=\"respuestas\"><br/>";
                    echo "</form>";
                }
            ?>
        </main>
        <footer>
            <?php include "include/footer.php"; ?>
        </footer>
    </body>
</html>