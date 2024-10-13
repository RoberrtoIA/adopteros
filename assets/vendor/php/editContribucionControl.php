<?php
    require_once (__DIR__ . "/../../Model/contribucion.php");
    require_once (__DIR__ . "/../../Connection/database.php");
    require_once ("EditContribucion.php");

    if ($_POST) {
        if (isset($_POST['btn_actualizar_contribucion'])) {
            $id = $_POST['id'];
            $contribucion = $_POST['txt_contribucion'];
            // echo $id. ' '. $pregunta. ' '. $respuesta;

            Contribucion::Update($id, $contribucion);
                echo "<script> Swal.fire({icon:'success',
                        title:'¡Completado!',
                        text:'Datos de la petición de contribución actualizadas con éxito',
                        confirmButtonText: 'Continuar', confirmButtonColor: '#1a8e32',});
                    </script>";
        }
    }
