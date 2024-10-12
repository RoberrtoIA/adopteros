<?php
	require_once (__DIR__ . "/../../Model/requisito.php");
	require_once (__DIR__ . "/../../Connection/database.php");

    $requisito_registrado_con_exito = false;
	if (isset($_POST['btn_agregar_requisito'])) {
		
		$texto = $_POST['txt_texto'];
		$subtexto = $_POST['txt_subtexto'];
		
		Requisito::Insert($texto, $subtexto);
        $requisito_registrado_con_exito = true;
	}

    if (isset($_GET["action"]) && $_GET["action"] == 'borrar') {
        
        $id_remover = $_GET["id"];
        Requisito::Delete($id_remover);
        header('location: ../../../panel-de-control.php');
        die();
    }