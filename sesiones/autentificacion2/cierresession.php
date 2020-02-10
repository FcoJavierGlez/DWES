<?php
    unset($_SESSION);
    session_destroy();
    session_start();
    session_regenerate_id();
    header("Location: /index.php");
    exit; 
?>