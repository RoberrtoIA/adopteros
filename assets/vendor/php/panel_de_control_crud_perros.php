<?php
	require_once (__DIR__ . "/../../Model/perro.php");
	require_once (__DIR__ . "/../../Connection/database.php");

	$perro_registrado_con_exito = false;
	if (isset($_POST['btn_registrar'])) {
		
		$nombre = $_POST['txt_name'];
		$edadnum = (int)$edad = $_POST['txt_edad'];
		$edad_mesesnum = (int)$edad_meses = $_POST['txt_edad_meses'];
		$description = $_POST['description'];
		$directorio_destino = 'savedImages';
		$nombre_fichero = 'photo';
		$tmp_name = $_FILES[$nombre_fichero]['tmp_name'];
		
		//si hemos enviado un directorio que existe realmente y hemos subido el archivo
		if (is_dir($directorio_destino) && is_uploaded_file($tmp_name)) {
			$img_file = $_FILES[$nombre_fichero]['name'];
			$img_type = $_FILES[$nombre_fichero]['type'];
			
			// Si se trata de una imagen
			if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type, "jpg")) || strpos($img_type, "png"))) {
				if (move_uploaded_file($tmp_name, $directorio_destino . '/' . $img_file)) {
					$saved = true;
				}
			}
		}
		
		if ($saved) {
			$uid_foto = $directorio_destino . '/' . $img_file;
			Perro::Insert($nombre, $edadnum, $edad_mesesnum, $description, $uid_foto);
			$perro_registrado_con_exito = true;
		}
	}
?>
