<?php

class DB
{
    private static $instancia = NULL;
    public static function CrearInstancia($user = 'adoptero_admin', $pass = 'EvR5Wf[_N{#z-J7N')
    {
        try {
            if (!isset(self::$instancia)) {
                $OpcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                self::$instancia = new PDO('mysql:host=localhost;dbname=adoptero_adopteros', $user, $pass, $OpcionesPDO);
            }
            return self::$instancia;
        } catch (PDOException $e) {
            return false;
        }
    }
}
