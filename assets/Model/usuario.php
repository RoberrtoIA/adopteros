<?php

class Usuario
{
    public $id;
    public $username;
    public $passcode;
    public $auth;

    private function __construct($id, $username, $passcode, $auth)
    {
        $this->id = $id;
        $this->username = $username;
        $this->passcode = $passcode;
        $this->auth = $auth;
    }

    public static function Insert($username, $passcode, $auth)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL usuario_insert(?,?,?)");
        $sql->execute(array($username, $passcode, $auth));
        $conexion = null;
    }

    public static function Delete($id)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL usuario_delete(?)");
        $sql->execute(array($id));
        $conexion = null;
    }

    public static function Update($id, $passcode)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL usuario_update_password(?,?)");
        $sql->execute(array($id, $passcode));
        $conexion = null;
    }

    public static function Get()
    {
        $usuarios = [];
        $conexion = DB::CrearInstancia();
        $sql = $conexion->query("SELECT * FROM usuario");

        foreach ($sql->fetchAll() as $usuario) {
            $usuarios[] = new usuario($usuario["id"], $usuario["username"], $usuario["pass"], $usuario["auth"]);
        }

        $conexion = null;
        return $usuarios;
    }

    public static function GetById($id)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->query("select * from usuario where id=" . $id);

        foreach ($sql->fetchAll() as $usuario) {
            $usuario = new usuario(
                $usuario["id"], 
                $usuario["username"], 
                $usuario["pass"], 
                $usuario["auth"]
            );
        }

        $conexion = null;
        return $usuario;
    }

    public static function GetUnique($username, $passcode)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->query("select * from usuario where username='" . $username . "'");

        foreach ($sql->fetchAll() as $usuario) {
            $usuario = new usuario(
                $usuario["id"],
                $usuario["username"], 
                $usuario["pass"], 
                $usuario["auth"]
            );
        }

        $conexion = null;
        return $usuario;
    }
}
