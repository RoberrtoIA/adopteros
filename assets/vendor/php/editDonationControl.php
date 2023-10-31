<?php
    require_once (__DIR__ . "/../../Model/donacion.php");
    require_once (__DIR__ . "/../../Connection/database.php");
    require_once ("EditDonation.php");

    if ($_POST) {
        if (isset($_POST['btn_actualizar_donacion'])) {
            $id = $_POST['id'];
            $url = $_POST['txt_url'];
            $monto = $_POST['txt_monto'];
            echo $id. ' '. $url. ' '. $monto;

            Donacion::Update($id, $url, $monto);
                echo "<script> Swal.fire({icon:'success',
                        title:'¡Completado!',
                        text:'Datos del enlace de donación actualizados con éxito',
                        confirmButtonText: 'Continuar', confirmButtonColor: '#1a8e32',});
                    </script>";
        }
    }
