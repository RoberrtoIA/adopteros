<?php
	require_once (__DIR__ . "/../../Model/contribucion.php");
	require_once (__DIR__ . "/../../Connection/database.php");

	$contribucion_registrada_con_exito = false;
	if (isset($_POST['btn_agregar_contribucion'])) {
		
		$contribucion = $_POST['txt_contribucion'];
		
		Contribucion::Insert($contribucion);
        $contribucion_registrada_con_exito = true;
	}

    if (isset($_GET["action"]) && $_GET["action"] == 'borrar') {
        
        $id_remover = $_GET["id"];
        Contribucion::Delete($id_remover);
        header('location: ../../../panel-de-control.php');
        die();
    }