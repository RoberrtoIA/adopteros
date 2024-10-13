<?php
    require_once (__DIR__ . "/../../Model/pregunta.php");
    require_once (__DIR__ . "/../../Connection/database.php");
    require_once ("EditFaq.php");

    if ($_POST) {
        if (isset($_POST['btn_actualizar_faq'])) {
            $id = $_POST['id'];
            $pregunta = $_POST['txt_pregunta'];
            $respuesta = $_POST['txt_respuesta'];
            // echo $id. ' '. $pregunta. ' '. $respuesta;

            Pregunta::Update($id, $pregunta, $respuesta);
                echo "<script> Swal.fire({icon:'success',
                        title:'¡Completado!',
                        text:'Datos de la FAQ actualizados con éxito',
                        confirmButtonText: 'Continuar', confirmButtonColor: '#1a8e32',});
                    </script>";
        }
    }
