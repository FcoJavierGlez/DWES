<?php
/**
 * Calcula la edad según la fecha de nacimiento introducida.
 * 
 * @author Fco Javier González Sabariego
 */

$diaNacimiento=5;
$mesNacimiento=10;
$annoNacimiento=1986;

$diaActual=date("j");
$mesActual=date("n");
$annoActual=date("Y");

$edad=$annoActual-$annoNacimiento;

echo "Año actual $annoActual, fecha de nacimiento introducida: $diaNacimiento/$mesNacimiento/$annoNacimiento.<br/>";

if ($mesActual<$mesNacimiento || ($mesActual==$mesNacimiento && $diaActual<$diaNacimiento)) {
    --$edad;
}
echo "Tienes $edad años.";

echo "<br/><a href="."../verCodigo.php?src=".str_replace("&bsol;","",__FILE__)."><button>Ver código</button></a><br/>";
?>