<?php
    require_once (__DIR__ . "/../../Model/perro.php");
    require_once (__DIR__ . "/../../Connection/database.php");

    if (isset($_GET["action"]) && $_GET["action"] == 'borrar') {
       
        $id_remover = $_GET["id"];
        Perro::Delete($id_remover);
        header('location: ../../../panel-de-control.php');
        die();
    }
?>
