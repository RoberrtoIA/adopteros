<?php

class InformacionContacto
{
    public $id;
    public $telefono_upfoter;
    public $email;
    public $instagram_link;
    public $twitter_link;
    public $facebook_link;

    private function __construct($id, $telefono_upfoter, $email, $instagram_link, $twitter_link, $facebook_link)
    {
        $this->id = $id;
        $this->telefono_upfoter = $telefono_upfoter;
        $this->email = $email;
        $this->instagram_link = $instagram_link;
        $this->twitter_link = $twitter_link;
        $this->facebook_link = $facebook_link;
    }

    public static function Update($telefono_upfoter, $email, $instagram_link, $twitter_link, $facebook_link)
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->prepare("CALL contacto_update(?,?,?,?,?)");
        $sql->execute(array($telefono_upfoter, $email, $instagram_link, $twitter_link, $facebook_link));
        $conexion = null;
    }

    // public static function All()
    // {
    //     $informacion_contacto = [];
    //     $conexion = DB::CrearInstancia();
    //     $sql = $conexion->query("SELECT * FROM contactos");

    //     foreach ($sql->fetchAll() as $informacion_contacto) {
    //         $informacion_contacto[] = new InformacionContacto(
    //             $informacion_contacto["id"],
    //             $informacion_contacto["telefono_upfoter"],
    //             $informacion_contacto["email"],
    //             $informacion_contacto["instagram_link"],
    //             $informacion_contacto["twitter_link"],
    //             $informacion_contacto["facebook_link"]
    //         );
    //     }

    //     $conexion = null;
    //     return $informacion_contacto;
    // }

    public static function GetAll()
    {
        $conexion = DB::CrearInstancia();
        $sql = $conexion->query("SELECT * FROM contactos WHERE id=1");

        foreach ($sql->fetchAll() as $informacion_contacto) {
            $informacion_contacto[] = new InformacionContacto(
                $informacion_contacto["id"],
                $informacion_contacto["telefono_upfoter"],
                $informacion_contacto["email"],
                $informacion_contacto["instagram_link"],
                $informacion_contacto["twitter_link"],
                $informacion_contacto["facebook_link"]
            );
        }

        $conexion = null;
        return $informacion_contacto;
    }
}