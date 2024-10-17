<?php

class Inbox
{
    public $id;
    public $correo;
    public $asunto;
    public $mensaje;
    public $fecha;

    private function __construct($id, $correo, $asunto, $mensaje, $fecha)
    {
        $this->id = $id;
        $this->correo = $correo;
        $this->asunto = $asunto;
        $this->mensaje = $mensaje;
        $this->mensaje = $mensaje;
        $this->fecha = $fecha;
    }

    public static function GetById($id)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->query("SELECT * FROM inbox WHERE id=" . $id);

        foreach ($sql->fetchAll() as $inboxes) {
            $inbox = new Inbox(
                $inboxes["id"],
                $inboxes["correo"],
                $inboxes["asunto"],
                $inboxes["mensaje"],
                $inboxes["fecha"]
            );
        }

        $conexion = null;
        return $inbox;
    }

    public static function All()
    {
        $inbox = [];
        $conexion = DB::CrearInstancia();
        $sql = $conexion->query("SELECT * FROM inbox");

        foreach ($sql->fetchAll() as $inboxes) {
            $inbox[] = new Inbox(
                $inboxes["id"],
                $inboxes["correo"],
                $inboxes["asunto"],
                $inboxes["mensaje"],
                $inboxes["fecha"]
            );
        }

        $conexion = null;
        return $inbox;
    }

    public static function Insert($correo, $asunto, $mensaje, $fecha)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL inbox_insert(?,?,?,?)");
        $sql->execute(array($correo, $asunto, $mensaje, $fecha));
        $conexion = null;
    }
}