<?php
include(__DIR__ . "/../../Connection/database.php");

    $login_exception = 0;

    function get_query($query)
    {
        $conexion = DB::CrearInstancia();

        try {
            $result = $conexion->prepare($query);
            $result->execute();
            $conexion = null;

            return $result->fetchAll();
            
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            $conexion = null;
        }
    }

    session_start();

    # Inicio de sesión
    if (isset($_POST["btn_ingresar"])) {

        $username = $_POST["txt_usuario"];
        $password = $_POST["txt_password"];

        # Username match
        $rows = get_query('SELECT * FROM usuario WHERE username = "' . $username . '";');

        if ($rows) {

            $stored_hash = $rows[0]['pass'];
            $auth = $rows[0]['auth'];
            $id = $rows[0]['id'];

            # Verificando y guardando sesión
            if (password_verify($password, $stored_hash)) {

                $_SESSION['active_login'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['auth'] = $auth;
                $_SESSION['id'] = $id;
                header('location:panel-de-control.php');

            } else {
                $login_exception = 1;
            }

        } else {
            $login_exception = 1;
        }
    }
?>
