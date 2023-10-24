<?php
    require_once (__DIR__ . "/../../Model/usuario.php");
    require_once (__DIR__ . "/../../Connection/database.php");
    require_once ("EditUser.php");

    if ($_POST) {
        if (isset($_POST['btn_edit_usuario'])) {
            $id = $_POST['id'];
            $passcode = $_POST['txt_password'];
            $passcode = password_hash($passcode, PASSWORD_DEFAULT);
            Usuario::Update($id, $passcode);
            echo "<script> Swal.fire({icon:'success',
                    title:'¡Completado!',
                    text:'Datos de cuenta de usuario actualizados con éxito',
                    confirmButtonText: 'Continuar', confirmButtonColor: '#1a8e32',});
                </script>";
        }
    }
?>