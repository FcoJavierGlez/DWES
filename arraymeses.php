<?php
/**
 * 
 */
$arrayMeses=array(
    "Enero"=>array(
        "ndias"=>31,
        "diasFestivos"=>array(1,6)
    ),
    "Febrero"=>array(
        "ndias"=>28,
        "diasFestivos"=>array(28)
    ),
    "Marzo"=>array(
        "ndias"=>31,
        "diasFestivos"=>array()
    ),
    "Abril"=>array(
        "ndias"=>30,
        "diasFestivos"=>array()
    ),
    "Mayo"=>array(
        "ndias"=>31,
        "diasFestivos"=>array(1)
    ),
    "Junio"=>array(
        "ndias"=>30,
        "diasFestivos"=>array()
    ),
    "Julio"=>array(
        "ndias"=>31,
        "diasFestivos"=>array()
    ),
    "Agosto"=>array(
        "ndias"=>31,
        "diasFestivos"=>array(15)
    ),
    "Septiembre"=>array(
        "ndias"=>30,
        "diasFestivos"=>array()
    ),
    "Octubre"=>array(
        "ndias"=>31,
        "diasFestivos"=>array(12)
    ),
    "Noviembre"=>array(
        "ndias"=>30,
        "diasFestivos"=>array()
    ),
    "Diciembre"=>array(
        "ndias"=>31,
        "diasFestivos"=>array(6,8,12,25)
    ),
);

$diaActual=date('j');
$mesActual=date('n');
$annoActual=date('Y');
$ldisplayCalendario=true;

$mesSeleccionado=$mesActual;
$annoSeleccionado=$annoActual;
$confSelected="";

//validación:
if (isset($_POST['enviar'])) {
    $mesSeleccionado=$_POST['mes'];
    $annoSeleccionado=$_POST['anno'];
}
$ldisplayCalendario=false;

//echo date('L',2019);
/*$arrayMeses["Febrero"]["ndias"]=29;
echo $arrayMeses["Febrero"]["ndias"]."<br/>";

echo easter_date(2019)."<br/>";
echo easter_days(2019);*/
?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
            <?php
                $array=array_keys($arrayMeses);
                echo "<select name='Meses'>";
                $i=1;
                foreach ($arrayMeses as $mes => $valor) {
                    echo ($array[$mesSeleccionado-1]==$mes) ? "<option type=".text." value=".$i." selected='selected'>$mes</option>" 
                        : "<option type=".text." value=".$i.">$mes</option>";
                    $i++;
                }
                echo "</select>";
                echo "Año: ";
                echo "<input type='text' value=''><br/>";
            ?>
            <a href="arraymeses.php"><input type="submit" name="enviar"/></a>
        </form>
    </body>
</html>