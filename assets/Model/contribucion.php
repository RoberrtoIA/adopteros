<?php

class Contribucion
{
    public $id;
    public $contribucion;

    private function __construct($id, $contribucion)
    {
        $this->id = $id;
        $this->contribucion = $contribucion;
    }

    public static function GetById($id)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->query("SELECT * FROM contribuciones WHERE id=" . $id);

        foreach ($sql->fetchAll() as $contribuciones) {
            $contribucion = new Contribucion(
                $contribuciones["id"],
                $contribuciones["contribucion"]
            );
        }

        $conexion = null;
        return $contribucion;
    }

    public static function All()
    {
        $contribuciones = [];
        $conexion = DB::CrearInstancia();
        $sql = $conexion->query("SELECT * FROM contribuciones");

        foreach ($sql->fetchAll() as $contribucion) {
            $contribuciones[] = new Contribucion(
                $contribucion["id"],
                $contribucion["contribucion"]
            );
        }

        $conexion = null;
        return $contribuciones;
    }

    public static function Insert($contribucion)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL contribucion_insert(?)");
        $sql->execute(array($contribucion));
        $conexion = null;
    }

    public static function Update($id, $contribucion)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL contribucion_update(?,?)");
        $sql->execute(array($id, $contribucion));
        $conexion = null;
    }

    public static function Delete($id)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL contribucion_delete(?)");
        $sql->execute(array($id));
        $conexion = null;
    }
}