<?php
    require_once("config/conexion.php");
    session_destroy();
    header("Location:".Conectar::ruta()."login.php");
    exit();

?>      