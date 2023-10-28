<?php
	require_once (__DIR__ . "/../../Model/donacion.php");
	require_once (__DIR__ . "/../../Connection/database.php");

	$perro_registrado_con_exito = false;
	if (isset($_POST['btn_registrar'])) {
		
		$url = $_POST['txt_url'];
		$monto = $_POST['txt_monto'];
		
		Donacion::Insert($url, $monto);
		$perro_registrado_con_exito = true;
	}
?>
