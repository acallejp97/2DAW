<?php
class Conexion
{
    private $db = "G1Blog";
    private $servidor = "mysql:host=127.0.0.1;dbname=";
    private $username = "root";
    private $password = "";
    private $conn;
    private static $instance = null;

    private function __construct()
    {

    }

    private function __clone()
    {}

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO("mysql:host=127.0.0.1;dbname=" . "G1Blog", "root", "", $pdo_options);
        }
        return self::$instance;
    }

    public static function cerrar()
    {
        $instance = null;
    }
}
