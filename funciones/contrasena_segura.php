<?php
    /**
     * @author Fco Javier González Sabariego
     */
?>
<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Francisco Javier González Sabariego">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contraseña segura</title>
        <link rel="stylesheet" type="text/css" href="./css/verbos.css">
    </head>
    <body>
        <header></header>
        <nav></nav>
        <main>
            <h1 style="text-align: center"><u>Desarrollo en Entorno Servidor 2019/20</u></h1>
            <h2>Autor: Fco Javier González Sabariego</h2>
            <p><b>Validar Contraseña</b></p>
            <?php
                if(!isset($_POST['enviar'])) {
                    echo "<form action=".$_SERVER['PHP_SELF']." method='post'>";
                    echo "<input type='password' name='contrasena' value=''>";
                    echo "<input type='submit' name='enviar'>";
                    echo "</form>";
                } else {
                    echo "<form action=".$_SERVER['PHP_SELF']." method='post'>";
                    echo "<input type='password' name='contrasena' value='".$_POST['contrasena']."'>";
                    echo "<input type='submit' name='enviar'>";
                    echo "</form>";
                    //if(validaContrasena($_POST['contrasena']))
                    if(validaContrasena("Pruebade..45contrasena"))
                        echo "<p>Su contraseña es segura.</p>";
                    else
                        echo "<p>Su contraseña no es segura.</p>";
                        
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
    function validaContrasena($cadena) {
        return (preg_match("/([\w]+[\W]+){8,32}$/", $cadena));
    }
?>
