<?php
    require_once (__DIR__ . "/../../Model/perro.php");
    require_once (__DIR__ . "/../../Connection/database.php");

    if (isset($_GET["action"]) && $_GET["action"] == 'cambiar') {
        
        $id_perro = $_GET["id"];
        Perro::changeStatus($id_perro);
        header('location: ../../../panel-de-control.php');
        die();
    }
?>
