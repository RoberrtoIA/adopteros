<?php

class Donacion
{
    public $id;
    public $url;
    public $monto;

    private function __construct($id, $url, $monto)
    {
        $this->id = $id;
        $this->url = $url;
        $this->monto = $monto;
    }

    public static function Insert($url, $monto)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL donacion_insert(?,?)");
        $sql->execute(array($url, $monto));
        $conexion = null;
    }

    public static function Delete($id)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL donacion_delete(?)");
        $sql->execute(array($id));
        $conexion = null;
    }

    public static function Update($id, $url, $monto)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL donacion_update(?,?,?,?,?,?)");
        $sql->execute(array($id, $url, $monto));
        $conexion = null;
    }

    public static function All()
    {
        $donaciones = [];
        $conexion = DB::CrearInstancia();
        $sql = $conexion->query("SELECT * FROM donaciones");

        foreach ($sql->fetchAll() as $donacion) {
            $donaciones[] = new Donacion(
                $donacion["id"],
                $donacion["url"],
                $donacion["monto"]
            );
        }

        $conexion = null;
        return $donaciones;
    }

    public static function GetById($id)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->query("SELECT * FROM donaciones WHERE id=" . $id);

        foreach ($sql->fetchAll() as $donacion) {
            $donacion = new Donacion(
                $donacion["id"],
                $donacion["url"],
                $donacion["monto"]
            );
        }

        $conexion = null;
        return $donacion;
    }
}