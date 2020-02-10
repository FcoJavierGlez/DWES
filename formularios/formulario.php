<?php
    /**
     * Formulario se que envía la información así mismo para procesarla.
     * 
     * @author Fco Javier González Sabariego
     */

    if (!isset($_POST['enviar'])) {
        echo "<form method='post' action=".htmlspecialchars($_SERVER['PHP_SELF']).">";
        echo "Nombre: <input type='text' name='nombre' value=''><br/>";
        echo "Nota: <input type='text' name='nota' value=''><br/>";

        echo "<a href="."formulario.php><input type='submit' name='enviar'/></a>";
        echo "</form>";
    }
    else {
        if (empty($_POST['nombre']) || empty($_POST['nota']) || ($_POST['nota']<1 || $_POST['nota']>10)) {
            echo "<form method='post' action=".htmlspecialchars($_SERVER['PHP_SELF']).">";
            if (empty($_POST['nombre'])) {
                echo "Nombre: <input type='text' name='nombre' value=''><font color='red'>(*)CAMPO REQUERIDO</font><br/>";
            }
            else {
                echo "Nombre: <input type='text' name='nombre' value=".limpiaCampo($_POST['nombre'])."><br/>";
            }

            if (empty($_POST['nota'])) {
                echo "Nota: <input type='text' name='nota' value=''><font color='red'>(*)CAMPO REQUERIDO</font><br/>";
            }
            elseif ($_POST['nota']<1 || $_POST['nota']>10) {
                echo "Nota: <input type='text' name='nota' value=".limpiaCampo($_POST['nota'])."><font color='red'>(*)RANGO VÁLIDO [1-10]</font><br/>";
            }
            else {
                echo "Nota: <input type='text' name='nota' value=".limpiaCampo($_POST['nota'])."><br/>";
            }
            echo "<a href="."formulario.php><input type='submit' name='enviar'/></a>";
            echo "</form>";
        }
        else {
            echo "Formulario enviado. Gracias por su colaboración.<br/>";
            echo "Nombre: ".limpiaCampo($_POST['nombre'])."<br/>";
            echo "Nombre: ".limpiaCampo($_POST['nota'])."";
        }
    }

    echo "<br/><a href="."../verCodigo.php?src=".str_replace("&bsol;","",__FILE__)."><button>Ver código</button></a>";

    function limpiaCampo($campo) {
        $campo=trim($campo);
        $campo=stripslashes($campo);
        $campo=htmlspecialchars($campo);
        return $campo;
    }

?>
