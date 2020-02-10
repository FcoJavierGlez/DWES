<?php
    /**
     * Imprime el calendario del mes y el año introducidos por un formulario marcando en verde el día actual según el sistema 
     * y en rojo los domingos y días festivos.
     * 
     * @author Fco Javier González Sabariego.
     * @since 07/10/2019
     */

    session_start(); //Primero creamos la sesión

    if (!isset($_SESSION['tareas'])) {  //Si $_SESSION['tareas'] no existe lo creamos.
        $_SESSION['tareas'] = array();
    }
    $strfecha="";
    $anno;

    /* include_once("include/funciones.php");
    include_once("include/constantes.php"); */

    if((!isset($_POST['enviar']) || empty($_POST['anno'])) && empty($_GET['fecha'])) { //Comprobamos si el acceso al formulario no proviene del botón enviar o si el valor del año está vacío
        echo "<form method='post' action=".htmlspecialchars($_SERVER['PHP_SELF']).">";

        echo "Inserte el año: ";
        echo "<input type='text' name='anno' value=''/><br/>";
        echo "Seleccione el mes: <br/>";

        imprimeMeses();

        echo "<a href="."calendario.php><input type='submit' name='enviar'/></a>";
        echo "</form>";
    }
    /* elseif (empty($_GET['fecha'])) {                  //En caso de acceder ejecutamos la escritura del calendario */
    else {                  //En caso de acceder ejecutamos la escritura del calendario
        $diaSemana = ['L','M','X','J','V','S','D'];                   //Lista días de la semana
        $diaSeleccionado = $diaActual = date("d");                    //Día actual del mes
        $festivos = array(                                            //Días festivos del mes seleccionado
            array(1),
            array(28),
            array(0),
            array(0),
            array(1),
            array(0),
            array(0),
            array(15),
            array(0),
            array(12),
            array(1),
            array(6,25)
        );
        
        if (empty($_GET['fecha'])) {
            $mes = $_POST['mes'];                                         //Mes seleccionado
            $anno = $_POST['anno'];                                       //Año seleccionado
        }

        if (isset($_GET['fecha'])) {
            $datosFecha = explode("-",$_GET['fecha']);
            $diaSeleccionado = (int)$datosFecha[0];     //Día seleccionado
            $mes = (int)$datosFecha[1];
            $anno = (int)$datosFecha[2];
        }
        //añadimos a los días festivos el viernes santo
        ((easter_days($anno)-12)<1) ? array_push($festivos[2],(31+(easter_days($anno)-12))) : array_push($festivos[3],(easter_days($anno)-12));

        $diasMes=cal_days_in_month(CAL_GREGORIAN, $mes, $anno);     //Días que posee el mes seleccionado (se asignan en el switch)
        $primerDiaSemana=date("N", mktime(0,0,0,$mes,1,$anno));     //Día de la semana al que corresponde el primer día del mes, Lunes=1 | Domingo=7
        $diaImprimido=1;                                            //El número de día impreso en el calendario


        $fecha = $diaSeleccionado."-".$mes."-".$anno;
    //    
        echo "<form method='post' action=".htmlspecialchars($_SERVER['PHP_SELF']).">";

        echo "Inserte el año: ";
        echo "<input type='text' name='anno' value=".$anno."><br/>";
        echo "Seleccione el mes: <br/>";

        imprimeMeses2($mes);

        echo "<a href="."calendario.php><input type='submit' name='enviar'/></a>";
        echo "</form>";
    
        echo "Calendario de $mes/$anno";
    
        //Imprimimos calendario
        echo "<table border='1'>";
        echo "<tr>";
        for ($i=0; $i<7; $i++) 
            echo "<td>$diaSemana[$i]</td>";
        echo "<tr>";
        for ($i=0; $i<6; $i++) {
            echo "<tr>";
            for ($j=1; $j<8; $j++) {
                $strfecha = $diaImprimido."-".$mes."-".$anno;
                if ($diaImprimido==1 && $j<$primerDiaSemana) 
                    echo "<td bgcolor=\"#CCCCCC\"></td>"; 
                else {
                    if ($diaImprimido<=$diasMes) {
                        if ($diaImprimido==$diaActual) 
                            echo "<td bgcolor=\"#73ff00\"><a href=".htmlspecialchars($_SERVER['PHP_SELF'])."?fecha=$strfecha".">$diaImprimido</a></td>"; //<a href="htmlspecialchars($_SERVER['PHP_SELF']).?fecha=$strfecha">
                        else {
                            if ($j==7 || esFestivo($diaImprimido, $mes, $festivos)) 
                                echo "<td bgcolor=\"#FF0000\"><a href=".htmlspecialchars($_SERVER['PHP_SELF'])."?fecha=$strfecha".">$diaImprimido</a></td>";
                            else 
                                echo "<td><a href=".htmlspecialchars($_SERVER['PHP_SELF'])."?fecha=$strfecha".">$diaImprimido</a></td>";
                        }
                        $diaImprimido++;
                    }
                    else 
                        echo "<td bgcolor=\"#CCCCCC\"></td>";
                }
            }
            echo "</tr>";
            if ($diaImprimido>$diasMes) 
                break;
        }
        echo "</table>";
        echo "Fecha seleccionada: $fecha";
        echo "<form action='' method='get'>
            <input type='text' value='' name='tarea'>
            <input type='hidden' name='fecha' value=".$fecha.">
            <input type='submit' name='nuevatarea'>
            <form>";
        
        foreach ($_SESSION['tareas'] as $clave => $valor) {
            if ($valor['fecha']==$fecha)
                echo $valor['fecha']."<br/>";
        }
    }

    echo "<br/><a href="."../verCodigo.php?src=".str_replace("&bsol;","",__FILE__)."><button>Ver código</button></a>";


    //Funciones\\

    /**
     * Comprueba si el año introducido como parámetro es bisiesto y devuelve un booleano.
     */
    function annoBisiesto($anno){
        if (($anno%4)!==0 && ($anno%100)!==0) return FALSE;
        elseif (($anno%4)==0 && ($anno%100)!==0) return TRUE;
        elseif (($anno%4)==0 && ($anno%100)==0 && ($anno%400)!==0) return FALSE;
    }
    
    /**
     * Comprueba si el día introducido como parámetro coincide con alguno de los días festivos 
     * introducidos como segundo parámetro y devuelve un booleano.
     */
    function esFestivo($dia,$mes,$festivos) {
        foreach($festivos[$mes-1] as $valor) {
            if ($dia==(int)$valor) 
                return TRUE;
        }
        return FALSE;
    }

    /**
     * Imprime un desplegable para un formulario con los 12 meses del año cuyo valor está comprendido entre 1-12.
     * El mes seleccionado por defecto es Enero.
     */
    function imprimeMeses() {
        $meses=["Enero","Febrero","Marzo","Abril","Mayo","Junio",
                "Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
        echo "<select id='mes' name='mes'>";
        for ($i=0; $i<12 ; $i++) {
            if($i==0)
                echo "<option value=".($i+1)." selected>".$meses[$i]."</option>";
            else
                echo "<option value=".($i+1).">".$meses[$i]."</option>";
        }
        echo "</select><br/>";
    }

    /**
     * Imprime un desplegable para un formulario con los 12 meses del año cuyo valor está comprendido entre 1-12.
     * El mes seleccionado por defecto es el número del mes que le pasamos como parámetro.
     */
    function imprimeMeses2($mes) {
        $meses=["Enero","Febrero","Marzo","Abril","Mayo","Junio",
                "Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
        echo "<select id='mes' name='mes'>";
        for ($i=0; $i<12 ; $i++) {
            if($mes==$i+1)
                echo "<option value=".($i+1)." selected='selected'>".$meses[$i]."</option>";
            else
                echo "<option value=".($i+1).">".$meses[$i]."</option>";
        }
        echo "</select><br/>";
    }
?>