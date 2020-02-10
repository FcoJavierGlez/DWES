<?php
    /**
     * 
     */
    session_start();
    $_SESSION['horaInicio']=time();

    //Si el login no está validado devolvemos a index.php
    if (!$_SESSION['aut'])
        header('Location: index.php');

    echo "Autentificacion correcta. Usted está conectado como: <b>".$_SESSION['user']."</b>";
    echo "<br/>Conectado desde: <b>".date("d/m/Y || H:i:s",$_SESSION['horaInicio'])."</b>";
    echo "<a href=\"index.php\">Regresar a home</a>";
?>