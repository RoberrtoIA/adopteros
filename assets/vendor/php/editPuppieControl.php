<?php
    require_once (__DIR__ . "/../../Model/perro.php");
    require_once (__DIR__ . "/../../Connection/database.php");
    require_once ("EditPuppie.php");

    if ($_POST) {
        if (isset($_POST['btn_actualizar'])) {
            $id = $_POST['id'];
            $nombre = $_POST['txt_name'];
            $edad = (int)$edadn = $_POST['txt_edad'];
            $meses = (int)$edadm = $_POST['txt_edad_meses'];
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
                $id = $_POST['id'];
                Perro::Update($id, $nombre, $edad, $meses, $description, $uid_foto);
                echo "<script> Swal.fire({icon:'success',
                        title:'¡Completado!',
                        text:'Datos de perro en adopción actualizados con éxito',
                        confirmButtonText: 'Continuar', confirmButtonColor: '#1a8e32',});
                    </script>";
            }
        }
    }
?>