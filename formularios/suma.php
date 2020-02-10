<?php
/**
 * @author Fco Javier goncález Sabariego
 * @since 14/10/2019
 */
    $procesaFormulario=false;
    $valores=array();
    $sumaFormulario=false;
    $ctdNumeros=0;

    $msgError=$clase_error="";
    $msgErrorSumandos=array();
    $clase_errorSumandos=array();

    if(isset($_POST['enviar'])) {
        $procesaFormulario=true;
        $ctdNumeros=$_POST['ctdNumeros'];
        if($_POST['ctdNumeros']<1) {
            $msgError="Introduzca un número mayor que cero";
            $clase_error="clase_error";
            $procesaFormulario=false;
        }
        for ($i=0; $i<$ctdNumeros; $i++) { 
            $valores[]=0;
        }
    }

    if(isset($_POST['sumar'])) {
        $ctdNumeros=$_POST['ctdNumeros'];
        $valores=$_POST['numeros'];
        $procesaFormulario=true;
        $sumaFormulario=true;
        for ($i=0; $i<count($valores); $i++) { 
            $msgErrorSumandos[$i]=$clase_errorSumandos[$i]="";
            if(empty($valores[$i])) {
                $sumaFormulario=false;
                $msgErrorSumandos[$i]="El número no puede estar vacío";
                $clase_errorSumandos[$i]="Clase error";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Francisco Javier González Sabariego">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Suma de números</title>
        <link rel="stylesheet" href="suma.css">
    </head>
    <body>
        <header></header>
        <nav></nav>
        <main>
            <h1 style="text-align: center"><u>Desarrollo en Entorno Servidor 2019/20</u></h1>
            <h2>Autor: Fco Javier González Sabariego</h2>
            <p><b>Suma de números</b></p>
            <?php
                echo "<form action=".htmlspecialchars($_SERVER['PHP_SELF'])." method='post'>";
                echo "<input type='number' name='ctdNumeros' value=''>";
                echo "<input type='submit' name'enviar'>";
                echo "</form>";
            ?>

            <?php
                if($procesaFormulario) {
                    echo "<form action=".htmlspecialchars($_SERVER['PHP_SELF'])." method='post'>";
                    for ($i=0; $i<$ctdNumeros; $i++) { 
                        echo "<input type='number' name='numeros[]' value=".$valores[$i].">";
                        echo "<span class=".$clase_errorSumandos[$i].">".$msgErrorSumandos[$i]."</span>";
                        echo "<br>";
                    }
                    echo "<input type='hidden' value=".$ctdNumeros." name='ctdNumeros'>";
                    echo "<input type='submit' value='' name='sumar'>";
                    echo "</form>";
                }

                if($sumaFormulario) {
                    echo array_sum($_POST['sumar']);
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