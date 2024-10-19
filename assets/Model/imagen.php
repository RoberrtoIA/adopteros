<?php

class Imagen
{
    public $id;
    public $landing_img;
    public $contribuir_img;

    private function __construct($id, $landing_img, $contribuir_img)
    {
        $this->id = $id;
        $this->landing_img = $landing_img;
        $this->contribuir_img = $contribuir_img;
    }

    public static function Get()
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->query("SELECT * FROM imagenes WHERE id=1");

        foreach ($sql->fetchAll() as $imagen) {
            $imagenes[] = new Imagen(
                $imagen["id"],
                $imagen["landing_img"],
                $imagen["contribuir_img"]
            );
        }

        $conexion = null;
        return $imagenes;
    }

    public static function Update($landing_img, $contribuir_img)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL imagenes_update(?,?)");
        $sql->execute(array($landing_img, $contribuir_img));
        $conexion = null;
    }    
}