<?php

class Perro
{
    public $id;
    public $nombre;
    public $edad;
    public $edad_meses;
    public $descripcion;
    public $fotografia;

    private function __construct($id, $nombre, $edad, $edad_meses, $descripcion, $fotografia)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->edad_meses = $edad_meses;
        $this->descripcion = $descripcion;
        $this->fotografia = $fotografia;
    }

    public static function Insert($nombre, $edad, $edad_meses, $descripcion, $fotografia)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL perro_insert(?,?,?,?,?)");
        $sql->execute(array($nombre, $edad, $edad_meses, $descripcion, $fotografia));
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
                $perro["uid_fotografia"]
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
                $perro["uid_fotografia"]
            );
        }

        $conexion = null;
        return $perro;
    }
}
