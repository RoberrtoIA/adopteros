<?php
	require_once (__DIR__ . "/../../Model/donacion.php");
	require_once (__DIR__ . "/../../Connection/database.php");

	$donacion_registrado_con_exito = false;
	if (isset($_POST['btn_registrar_donacion'])) {
		
		$url = $_POST['txt_url'];
		$monto = $_POST['txt_monto'];
		
		Donacion::Insert($url, $monto);
		$donacion_registrado_con_exito = true;
	}

	if (isset($_GET["action"]) && $_GET["action"] == 'borrar') {
        
        $id_remover = $_GET["id"];
        Donacion::Delete($id_remover);
        header('location: ../../../panel-de-control.php');
        die();
    }
?>
