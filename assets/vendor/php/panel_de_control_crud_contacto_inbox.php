<?php
	require_once (__DIR__ . "/../../Model/inbox.php");
	require_once (__DIR__ . "/../../Connection/database.php");

    $email_enviado_con_exito = false;
	if (isset($_POST['btn_registrar_inbox'])) {
		
		$correo = $_POST['correo'];
		$asunto = $_POST['asunto'];
		$mensaje = $_POST['mensaje'];
		$fecha = date('Y-m-d H:i:s');
		
		Inbox::Insert($correo, $asunto, $mensaje, $fecha);
        $email_enviado_con_exito = true;
	}

?>
