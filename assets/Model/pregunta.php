<?php

class Pregunta
{
    public $id;
    public $pregunta;
    public $respuesta;

    private function __construct($id, $pregunta, $respuesta)
    {
        $this->id = $id;
        $this->pregunta = $pregunta;
        $this->respuesta = $respuesta;
    }

    public static function GetById($id)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->query("SELECT * FROM preguntas WHERE id=" . $id);

        foreach ($sql->fetchAll() as $preguntas) {
            $pregunta = new Pregunta(
                $preguntas["id"],
                $preguntas["pregunta"],
                $preguntas["respuesta"]
            );
        }

        $conexion = null;
        return $pregunta;
    }

    public static function All()
    {
        $preguntas = [];
        $conexion = DB::CrearInstancia();
        $sql = $conexion->query("SELECT * FROM preguntas");

        foreach ($sql->fetchAll() as $pregunta) {
            $preguntas[] = new Pregunta(
                $pregunta["id"],
                $pregunta["pregunta"],
                $pregunta["respuesta"]
            );
        }

        $conexion = null;
        return $preguntas;
    }

    public static function Insert($pregunta, $respuesta)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL pregunta_insert(?,?)");
        $sql->execute(array($pregunta, $respuesta));
        $conexion = null;
    }

    public static function Update($id, $pregunta, $respuesta)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL pregunta_update(?,?,?)");
        $sql->execute(array($id, $pregunta, $respuesta));
        $conexion = null;
    }

    public static function Delete($id)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL pregunta_delete(?)");
        $sql->execute(array($id));
        $conexion = null;
    }
}