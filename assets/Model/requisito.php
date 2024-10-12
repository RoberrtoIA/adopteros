<?php

class Requisito
{
    public $id;
    public $texto;
    public $subtexto;

    private function __construct($id, $texto, $subtexto)
    {
        $this->id = $id;
        $this->texto = $texto;
        $this->subtexto = $subtexto;
    }

    public static function GetById($id)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->query("SELECT * FROM requisitos WHERE id=" . $id);

        foreach ($sql->fetchAll() as $requisito) {
            $requisito = new Requisito(
                $requisito["id"],
                $requisito["texto"],
                $requisito["subtexto"]
            );
        }

        $conexion = null;
        return $requisito;
    }

    public static function All()
    {
        $requisitos = [];
        $conexion = DB::CrearInstancia();
        $sql = $conexion->query("SELECT * FROM requisitos");

        foreach ($sql->fetchAll() as $requisito) {
            $requisitos[] = new Requisito(
                $requisito["id"],
                $requisito["texto"],
                $requisito["subtexto"]
            );
        }

        $conexion = null;
        return $requisitos;
    }

    public static function Insert($texto, $subtexto)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL requisito_insert(?,?)");
        $sql->execute(array($texto, $subtexto));
        $conexion = null;
    }

    public static function Update($id, $texto, $subtexto)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL requisito_update(?,?,?)");
        $sql->execute(array($id, $texto, $subtexto));
        $conexion = null;
    }

    public static function Delete($id)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL requisito_delete(?)");
        $sql->execute(array($id));
        $conexion = null;
    }
}