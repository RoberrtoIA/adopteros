<?php
	require_once (__DIR__ . "/../../Model/pregunta.php");
	require_once (__DIR__ . "/../../Connection/database.php");

    $pregunta_registrada_con_exito = false;
	if (isset($_POST['btn_agregar_faq'])) {
		
		$pregunta = $_POST['txt_pregunta'];
		$respuesta = $_POST['txt_respuesta'];
		
		Pregunta::Insert($pregunta, $respuesta);
		$donacion_registrado_con_exito = true;
	}

    if (isset($_GET["action"]) && $_GET["action"] == 'borrar') {
        
        $id_remover = $_GET["id"];
        Pregunta::Delete($id_remover);
        header('location: ../../../panel-de-control.php');
        die();
    }