<?php
    /**
     * Escribir una función que lea nombre y apellidos y devuelva las iniciales.
     * 
     * @author Fco javier González Sabariego
     * @since 25/10/2019
     */
?>
<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Francisco Javier González Sabariego">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Iniciales</title>
        <!-- <link rel="stylesheet" type="text/css" href=""> -->
    </head>
    <body>
        <header></header>
        <nav></nav>
        <main>
            <h1 style="text-align: center"><u>Desarrollo en Entorno Servidor 2019/20</u></h1>
            <h2>Autor: Fco Javier González Sabariego</h2>
            <p><b>Iniciales</b></p>
            <?php
                if(!isset($_POST['enviar'])) {
                    echo "<form action=".$_SERVER['PHP_SELF']." method='post'>";
                    echo "Inserte su nombre y apellidos: <input type='text' name='nombre' value=''>";
                    echo "<input type='submit' name='enviar'>";
                    echo "</form>";
                } else {
                    echo "<form action=".$_SERVER['PHP_SELF']." method='post'>";
                    echo "Inserte su nombre y apellidos: <input type='text' name='nombre' value='".$_POST['nombre']."'>";
                    echo "<input type='submit' name='enviar'>";
                    echo "</form>";
                    echo "Sus iniciales son: ".muestraIniciales($_POST['nombre']);
                }
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
<?php
    function muestraIniciales($nombre) {
        $salida = "";
        $nombre = trim($nombre);
        for ($i=0; $i<strlen($nombre); $i++) { 
            if($i==0 || ($nombre[$i-1]==" " && $nombre[$i]!=" "))
                $salida.=strtoupper($nombre[$i]).".";
        }
        return $salida;
    }
?>