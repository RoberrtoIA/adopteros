<?php
    require_once (__DIR__ . "/../../Model/informacion_contacto.php");
    require_once (__DIR__ . "/../../Connection/database.php");

    $info_contacto_editada_con_exito = false;

    if (isset($_POST['btn_actualizar_info_contacto'])) {
        $telefono = $_POST['txt_telefono'];
        $email = $_POST['txt_email'];
        $instagram = $_POST['txt_instagram'];
        $twitter = $_POST['txt_twitter'];
        $facebook = $_POST['txt_facebook'];

        InformacionContacto::Update($telefono, $email, $instagram, $twitter, $facebook);
        $info_contacto_editada_con_exito = true;
    }

?>
