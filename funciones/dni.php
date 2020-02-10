<?php
    /**
     * Valida el dni introducido en el formulario.
     * 
     * @author Fco Javer González Sabariego
     */
    
?>

<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Francisco Javier González Sabariego">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>DNI</title>
        <link rel="stylesheet" type="text/css" href="./css/verbos.css">
    </head>
    <body>
        <header></header>
        <nav></nav>
        <main>
            <h1 style="text-align: center"><u>Desarrollo en Entorno Servidor 2019/20</u></h1>
            <h2>Autor: Fco Javier González Sabariego</h2>
            <p><b>Validar DNI</b></p>
            <?php
                if(!isset($_POST['enviar'])) {
                    echo "<form action=".$_SERVER['PHP_SELF']." method='post'>";
                    echo "<input type='text' name='dni' value=''>";
                    echo "<input type='submit' name='enviar'>";
                    echo "</form>";
                } else {
                    echo "<form action=".$_SERVER['PHP_SELF']." method='post'>";
                    echo "<input type='text' name='dni' value=".$_POST['dni'].">";
                    echo "<input type='submit' name='enviar'>";
                    echo "</form>";
                    if(validaDNI($_POST['dni']))
                        echo "<p>Correcto</p>";
                        
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
    function validaDNI($dni) {
        $letras=array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E');
        if (validaPattern($dni)){
            if (substr($dni,0,8)>0 && substr($dni,8,1)==$letras[substr($dni,0,8)%23])
                return true;
            else
                imprimeDNIValido($dni,$letras);
                return false;
        }
        echo "<p>Incorrecto</p>";
        return false;
    }

    function imprimeDNIValido($dni,$letras) {
        echo "<p>Su DNI correcto es: ".substr($dni,0,8).$letras[substr($dni,0,8)%23];
    }


    function validaPattern($dni) {
        return (preg_match("/^([0-9]{8})([A-Z])$/", $dni));
    }
?>