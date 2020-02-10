<?php
    /**
     * Elimina cualquier elemento innecesario del dato de entrada
     */
    function limpiarDatos($dato) {
        $dato = trim($dato);
        $dato = stripcslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }

    /**
     * Comprueba si el campo del nombre está vacío, en caso de estarlo imprime el campo del formulario en rojo y un aviso de que
     * el campo es obligatorio, si es válido imprime el campo con el valor recibido tras pasar por un proceso de filtrado.
     * 
     * Además devolverá un booleano false si el campo está vacío, true si poseía un valor.
     */
    function compruebaNombre($nombre) {
        if (empty($nombre)) {
            echo "Nombre: <input type=\"text\" placeholder=\"Campo requerido (*)\" value=\"\" name=\"nombre\" class=\"input_error\"><br/>";
            return false;
        } 
        else {
            echo "Nombre: <input type=\"text\" value=".limpiarDatos($nombre)." name=\"nombre\"><br/>";
            return true;
        }
    }

    /**
     * Imprime las preguntas del formulario
     */
    function imprimePregunta($preguntasIngles, $i) {
        echo "<br/><b>Pregunta nº".($i+1).": ".$preguntasIngles[$i]["pregunta"].".</b> 
            (Valor acierto: ".$preguntasIngles[$i]["Acierto"]." || Valor fallo: ".$preguntasIngles[$i]["Fallo"].")<br/>";
        if ($preguntasIngles[$i]["Tipo"]=="text") echo "Respuesta: <input type=\"text\" value=\"\" name=".$i."><br/>";
        else {
            for ($j=0; $j<sizeof($preguntasIngles[$i]["Opciones"]); $j++) { 
                echo "<div><input type=\"radio\" name=".$i." value=".$preguntasIngles[$i]["Opciones"][$j].">".$preguntasIngles[$i]["Opciones"][$j]."</div>";
            }
        }
    }

    /**
     * Comprueba que la repsuesta sea correcta:
     */
    function validaRespuesta($preguntasIngles, $i, $respuesta) {
        if (is_array($preguntasIngles[$i]["Respuesta"])) {
            for ($j=0; $j<sizeof($preguntasIngles[$i]["Respuesta"]); $j++) 
                if ($preguntasIngles[$i]["Respuesta"][$j] == $respuesta) return true;
            return false;
        }        
        return $preguntasIngles[$i]["Respuesta"] == $respuesta;
    }

    /**
     * Imprime las preguntas del formulario validando la respuesta, si es correcta tendrá un fondo verde 
     * si no lo es, o está en blanco, será rojo.
     */
    function imprimePreguntaValidada($preguntasIngles, $i) {
        echo "<br/><b>Pregunta nº".($i+1).": ".$preguntasIngles[$i]["pregunta"].".</b> 
            (Valor acierto: ".$preguntasIngles[$i]["Acierto"]." || Valor fallo: ".$preguntasIngles[$i]["Fallo"].")<br/>";
        if ($preguntasIngles[$i]["Tipo"]=="text") {
            if (!empty($_POST[$i])) {   //Si la respuesta no está vacía validamos
                if (validaRespuesta($preguntasIngles, $i, $_POST[$i])) 
                    echo "Respuesta: <input type=\"text\" value=".$_POST[$i]." name=".$i." class=\"input_correcto\"><br/>";
                else echo "Respuesta: <input type=\"text\" value=".$_POST[$i]." name=".$i." class=\"input_error\"><br/>";
            } else echo "Respuesta: <input type=\"text\" value=\"\" name=".$i." class=\"input_error\"><br/>"; //Si está vacía la damos por mala
            
        } else {
            for ($j=0; $j<sizeof($preguntasIngles[$i]["Opciones"]); $j++) { 
                if (!empty($_POST[$i])) { //Si la respuesta no está vacía validamos
                    if ($preguntasIngles[$i]["Opciones"][$j]==$_POST[$i] && validaRespuesta($preguntasIngles, $i, $_POST[$i])) 
                        echo "<div class=\"input_correcto\"><input type=\"radio\" name=".$i." value=".$preguntasIngles[$i]["Opciones"][$j]." class=\"input_correcto\" checked>".$preguntasIngles[$i]["Opciones"][$j]."</div>";
                    elseif ($preguntasIngles[$i]["Opciones"][$j]==$_POST[$i])
                        echo "<div class=\"input_error\"><input type=\"radio\" name=".$i." value=".$preguntasIngles[$i]["Opciones"][$j]." class=\"input_error\" checked>".$preguntasIngles[$i]["Opciones"][$j]."</div>";
                    else 
                        echo "<div><input type=\"radio\" name=".$i." value=".$preguntasIngles[$i]["Opciones"][$j].">".$preguntasIngles[$i]["Opciones"][$j]."</div>";
                } else //Si está vacía la damos por mala
                    echo "<div><input type=\"radio\" name=".$i." value=".$preguntasIngles[$i]["Opciones"][$j].">".$preguntasIngles[$i]["Opciones"][$j]."</div>";
            }
        }
    }

    /**
     * Calcula la puntuación total
     */
    function calculaPuntuacion($preguntasIngles) {
        $puntos = 0;
        for ($i=0; $i<sizeof($preguntasIngles); $i++) { 
            if (!empty($_POST[$i])) {
                if (validaRespuesta($preguntasIngles, $i, $_POST[$i])) $puntos += $preguntasIngles[$i]["Acierto"];
                else $puntos += $preguntasIngles[$i]["Fallo"];
            } 
        }
        return $puntos;
    }
?>