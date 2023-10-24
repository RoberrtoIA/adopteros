<?php
    require_once (__DIR__ . "/../../Model/usuario.php");
    require_once (__DIR__ . "/../../Connection/database.php");

    $usuario_registrado_con_exito = false;
    $editor_password_editado_con_exito = false;
    $editor_password_editado_fallida = false;

    if (isset($_POST['btn_registrar_usuario'])) {
        $username = $_POST['txt_username'];
        $passcode = $_POST['txt_password'];
        $level = $_POST['select_group'];
        $passcode = password_hash($passcode, PASSWORD_DEFAULT);
        Usuario::Insert($username, $passcode, $level);
        $usuario_registrado_con_exito = true;
    }

    if (isset($_POST['btn_cambiar_password_ed'])) {
        $CurrentPassword = $_POST['txt_current_password_ed'];
        $passcode = $_POST['txt_new_password_ed'];
       
        $PasscodeCheck = $_POST['txt_password_check_ed'];
        $username = $_POST['username'];
        if ($passcode != $PasscodeCheck) {
            $editor_password_editado_fallida = true;
            return;
        }

        $passcode = password_hash($passcode, PASSWORD_DEFAULT);
        $usuario = Usuario::GetUnique($username, $passcode);
        if (!password_verify($CurrentPassword, $usuario->passcode)) {
            $editor_password_editado_fallida = true;
            return;
        }
        
        $id = $usuario->id;
        Usuario::Update($id, $passcode);
        $editor_password_editado_con_exito = true;
    }

    if (isset($_GET["action"]) && $_GET["action"] == 'borrarU') {
        $id_remover = $_GET["id"];
        Usuario::Delete($id_remover);
        header('location: ../../../panel-de-control.php');
        die();
    }
?>
