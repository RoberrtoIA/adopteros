<?php
    session_start();

    // Autorización en página
    if (!(isset($_SESSION['active_login']) && $_SESSION['active_login'] == true 
        && ($_SESSION['auth'] == 1 || $_SESSION['auth'] == 0 ))) {
        header('location:404.php');
    }

    // Btn - Cerrar sesión
    if(isset($_POST["btn_cerrar_sesion"]))
    {
        // Remover variables de sesión y destruir sesión
        session_unset();
        session_destroy(); 
        header('location:login.php');
    }
?>
