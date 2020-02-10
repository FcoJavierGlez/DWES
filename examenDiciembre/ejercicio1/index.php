<?php
    /**
     * Examen DWES diciembre 2019. Ejercicio1: Perfiles.
     * 
     * @author Fco Javier González Sabariego
     */

    //Incluimos ficheros
    include "config/config.php";
    include "include/funciones.php";
    include "include/constantes.php";

    $cookie = "";
    
    if (isset($_POST['enviar'])) {
        setcookie("noticias", "");
        setcookie('noticias', serialize($_POST['noticias']), time()+36000);
        $cookie = unserialize($_COOKIE['noticias']);
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
    <nav class="menu">
        <?php 
            /* echo "<ul>";
            for ($i=0; $i<sizeof($opcionesMenu[$_SESSION['perfil']]); $i++) { 
                if ($opcionesMenu[$_SESSION['perfil']][$i]['script']=="index") 
                    echo "<li><a href=".strtolower($opcionesMenu[$_SESSION['perfil']][$i]['script']).".php".">Home</a></li>";
                else 
                    echo "<li><a href=".$opcionesMenu[$_SESSION['perfil']][$i]['url']." target=\"_blank\">".
                    $opcionesMenu[$_SESSION['perfil']][$i]['script']."</a></li>";
            }
            echo "</ul>"; */
        ?>
    </nav>
    <main>
        <?php
            if (!isset($_POST['enviar'])) {
                echo "<form action=".$_SERVER['PHP_SELF']." method=\"post\">";
                
                foreach ($opcionesMenu as $key => $value) {
                    echo "<input type=\"checkbox\" name=\"noticias[]\" value=".$value.">".$key."<br/>";
                }
                
                echo "<input type=\"submit\" value=\"Confirmar\" name=\"enviar\">";
                echo "</form>";
            } else {    //Si recibimos la entrada del post mostramos los enlaces a las noticias de interés:
                echo "<form action=".$_SERVER['PHP_SELF']." method=\"post\">";
                foreach ($opcionesMenu as $key => $value) {
                    if (compruebaSeleccion($value, $cookie))
                        echo "<input type=\"checkbox\" name=\"noticias[]\" value=".$value." checked>".$key."<br/>";
                    else
                        echo "<input type=\"checkbox\" name=\"noticias[]\" value=".$value.">".$key."<br/>";
                }
                echo "<input type=\"submit\" value=\"Confirmar\" name=\"enviar\">";
                echo "</form>";

                foreach ($_POST['noticias'] as $indice) 
                    foreach ($noticias[$indice] as $key => $value) 
                        echo "<a href='#'>$value</a><br/>";
            }
        ?>
    </main>
    <aside></aside>
    <footer>
        <?php include "include/footer.php"; ?>
    </footer>
</body>
</html>