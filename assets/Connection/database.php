<?php

class DB
{
    private static $instancia = NULL;
    public static function CrearInstancia($user = 'root', $pass = '')
    {
        try {
            if (!isset(self::$instancia)) {
                $OpcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                self::$instancia = new PDO('mysql:host=localhost;dbname=adopteros', $user, $pass, $OpcionesPDO);
            }
            return self::$instancia;
        } catch (PDOException $e) {
            return false;
        }
    }
}