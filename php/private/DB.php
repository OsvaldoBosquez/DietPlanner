<?php

/**
 * Gestiona la conexión a la base de datos.
 */

class DB
{
    private static $conexion;

    /**
     * Obtiene la conexión actual a la base de datos, si no hay realiza una nueva.
     *
     * @return mysqli Conexión
     */
    public static function obtenerConexion()
    {
        if (!isset(self::$conexion)) {
            $config = parse_ini_file('config.ini');
            self::$conexion = new \mysqli($config['servidor'], $config['usuario'], $config['contrasenia'], $config['basedatos'], $config['puerto']);
        }                        

        return self::$conexion;
    }
}