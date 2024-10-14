<?php
    require_once (__DIR__ . "/../../Model/landing.php");
    require_once (__DIR__ . "/../../Connection/database.php");

    $landing_editada_con_exito = false;

    if (isset($_POST['btn_actualizar_landing'])) {
        $titulo = $_POST['txt_titulo'];
        $encabezado = $_POST['txt_encabezado'];
        $sub_encabezado = $_POST['txt_sub_encabezado'];
        $btn_ver_perros = $_POST['txt_btn_ver_perros'];
        $acerca_de_nosotros = nl2br($_POST['txt_acerca_de_nosotros']);
        $acerca_de_nosotros = str_replace(["<br />", "<br>"], "", $acerca_de_nosotros);
        $mision = $_POST['txt_mision'];
        $que_buscamos = $_POST['txt_que_buscamos'];
        $atencion_veterinaria = $_POST['txt_atencion_veterinaria'];
        $nuestro_suenho = $_POST['txt_nuestro_suenho'];

        // echo str_replace("\n", "hola",$acerca_de_nosotros);
        // die();

        Landing::Update($titulo, $encabezado, $sub_encabezado, $btn_ver_perros, $acerca_de_nosotros, $mision, $que_buscamos, $atencion_veterinaria, $nuestro_suenho);
        $landing_editada_con_exito = true;
    }

?>
