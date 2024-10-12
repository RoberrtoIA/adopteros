<?php
    require_once (__DIR__ . "/../../Model/requisito.php");
    require_once (__DIR__ . "/../../Connection/database.php");
    require_once ("EditRequisito.php");

    if ($_POST) {
        if (isset($_POST['btn_actualizar_requisito'])) {
            $id = $_POST['id'];
            $texto = $_POST['txt_texto'];
            $subtexto = $_POST['txt_subtexto'];
            // echo $texto. ' '. $texto. ' '. $subtexto;

            Requisito::Update($id, $texto, $subtexto);
                echo "<script> Swal.fire({icon:'success',
                        title:'¡Completado!',
                        text:'Datos del requisito de adopción actualizados con éxito',
                        confirmButtonText: 'Continuar', confirmButtonColor: '#1a8e32',});
                    </script>";
        }
    }
