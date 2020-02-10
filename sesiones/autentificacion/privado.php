<?php
    /**
     * 
     */
    session_start();
    $_SESSION['horaInicio']=time();
    $temporizador=" a las ";

    echo "Autentificacion correcta. Usted está conectado como: <b>".$_SESSION['user']."</b>";
    echo "<br/>Conectado desde: <b>".date("d/m/Y || H:i:s",$_SESSION['horaInicio'])."</b>";
?>