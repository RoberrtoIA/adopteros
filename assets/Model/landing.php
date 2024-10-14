<?php

class Landing
{
    public $id;
    public $titulo;
    public $encabezado;
    public $sub_encabezado;
    public $btn_ver_perros;
    public $acerca_de_nosotros;
    public $mision;
    public $que_buscamos;
    public $atencion_veterinaria;
    public $nuestro_suenho;

    private function __construct($id, $titulo, $encabezado, $sub_encabezado, $btn_ver_perros, $acerca_de_nosotros, $mision, $que_buscamos, $atencion_veterinaria, $nuestro_suenho)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->encabezado = $encabezado;
        $this->sub_encabezado = $sub_encabezado;
        $this->btn_ver_perros = $btn_ver_perros;
        $this->acerca_de_nosotros = $acerca_de_nosotros;
        $this->mision = $mision;
        $this->que_buscamos = $que_buscamos;
        $this->atencion_veterinaria = $atencion_veterinaria;
        $this->nuestro_suenho = $nuestro_suenho;
    }

    public static function Update($titulo, $encabezado, $sub_encabezado, $btn_ver_perros, $acerca_de_nosotros, $mision, $que_buscamos, $atencion_veterinaria, $nuestro_suenho)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL landing_update(?,?,?,?,?,?,?,?,?)");
        $sql->execute(array($titulo, $encabezado, $sub_encabezado, $btn_ver_perros, $acerca_de_nosotros, $mision, $que_buscamos, $atencion_veterinaria, $nuestro_suenho));
        $conexion = null;
    }

    public static function GetAll()
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->query("SELECT * FROM landing WHERE id=1");

        foreach ($sql->fetchAll() as $landing) {
            $landing[] = new Landing(
                $landing["id"],
                $landing["titulo"],
                $landing["encabezado"],
                $landing["sub_encabezado"],
                $landing["btn_ver_perros"],
                $landing["acerca_de_nosotros"],
                $landing["mision"],
                $landing["que_buscamos"],
                $landing["atencion_veterinaria"],
                $landing["nuestro_suenho"]
            );
        }

        $conexion = null;
        return $landing;
    }
}