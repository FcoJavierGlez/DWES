<?php
/**
 * @author Fco Javier González Sabariego
 */

if (!isset($_POST['enviar']) || (empty($_POST['Nombre'])) || (empty($_POST['Apellidos'])) 
|| (empty($_POST['Direccion'])) || (empty($_POST['Provincia'])) || (empty($_POST['Contrasenna']))
|| !(strlen($_POST['Telefono'])==9)) { //Comprueba si recibe una petición de un botón llamado "enviar"
    header('location:datospersonales.php');
}

//E imprime el valor de la información recibida de los inputs llamados "Nombre", "Apellidos", "Direccion", "Provincia"
echo "Nombre: ".$_POST['Nombre']."<br/>";
echo "Apellidos: ".$_POST['Apellidos']."<br/>";
echo "Direccion: ".$_POST['Direccion']."<br/>";
echo "Provincia: ".$_POST['Provincia']."<br/>";
echo "Teléfono: ".$_POST['Telefono']."<br/>";
echo "Contraseña: ".$_POST['Contrasenna']."<br/>";
echo "Trabajo: ".$_POST['trabajo']."<br/>";
echo "Estudios: ".$_POST['estudios']."<br/>";
echo "Nivel Inglés: ".$_POST['ingles']."<br/>";
foreach ($_POST['ocio'] as $key) {
    echo "Intereses: ".$key."<br/>";
}

echo "<br/><a href="."../verCodigo.php?src=".str_replace("&bsol;","",__FILE__)."><button>Ver código</button></a><br/>";

echo "<br/><a href=\"datospersonales.php\"><button>Volver al formulario</button></a>";

?>