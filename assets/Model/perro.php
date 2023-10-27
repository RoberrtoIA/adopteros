<?php

class Perro
{
    public $id;
    public $nombre;
    public $edad;
    public $edad_meses;
    public $descripcion;
    public $fotografia;
    public $adoptado;

    private function __construct($id, $nombre, $edad, $edad_meses, $descripcion, $fotografia, $adoptado)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->edad_meses = $edad_meses;
        $this->descripcion = $descripcion;
        $this->fotografia = $fotografia;
        $this->adoptado = $adoptado;
    }

    public static function Insert($nombre, $edad, $edad_meses, $descripcion, $fotografia)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL perro_insert(?,?,?,?,?)");
        $sql->execute(array($nombre, $edad, $edad_meses, $descripcion, $fotografia));
        $conexion = null;
    }

    public static function changeStatus($id)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL perro_change_status(?)");
        $sql->execute(array($id));
        $conexion = null;
    }

    public static function Delete($id)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL perro_delete(?)");
        $sql->execute(array($id));
        $conexion = null;
    }

    public static function Update($id, $nombre, $edad, $edad_meses, $descripcion, $fotografia)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL perro_update(?,?,?,?,?,?)");
        $sql->execute(array($id, $nombre, $edad, $edad_meses, $descripcion, $fotografia));
        $conexion = null;
    }

    public static function Get()
    {
        $perros = [];
        $conexion = DB::CrearInstancia();
        $sql = $conexion->query("SELECT * FROM perro");

        foreach ($sql->fetchAll() as $perro) {
            $perros[] = new Perro(
                $perro["id"],
                $perro["nombre"],
                $perro["edad"],
                $perro["edad_meses"],
                $perro["descripcion"],
                $perro["uid_fotografia"],
                $perro["adoptado"]
            );
        }

        $conexion = null;
        return $perros;
    }

    public static function GetById($id)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->query("SELECT * FROM perro WHERE id=" . $id);

        foreach ($sql->fetchAll() as $perro) {
            $perro = new Perro(
                $perro["id"],
                $perro["nombre"],
                $perro["edad"],
                $perro["edad_meses"],
                $perro["descripcion"],
                $perro["uid_fotografia"],
                $perro["adoptado"]
            );
        }

        $conexion = null;
        return $perro;
    }

    public static function Resume()
    {
        $conexion = DB::CrearInstancia();

        $datos = array();

        $sql = $conexion->query("SELECT COUNT(*) AS adoptados FROM perro WHERE adoptado = 1");

        // $datos['adoptados'] = $sql->fetchAll();
        foreach ($sql->fetchAll() as $perro) {
            $datos['adoptados'] = $perro['adoptados'];
        }

        $sql = $conexion->query("SELECT COUNT(*) AS noadoptados FROM perro WHERE adoptado = 0;");

        // $datos['noadoptados'] = $sql->fetchAll();
        foreach ($sql->fetchAll() as $perro) {
            $datos['noadoptados'] = $perro['noadoptados'];
        }

        $datos['total'] = $datos['adoptados'] + $datos['noadoptados'];

        $conexion = null;
        return $datos;
    }
}