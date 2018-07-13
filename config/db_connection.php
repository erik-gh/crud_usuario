<?php

class Database {

    private $_connection;
    private static $_instancia = null;
    private $_host = "localhost";
    private $_userName = "root";
    private $_password = "";
    private $_database = "test";
    private $_encode = "utf8";

    private function __construct() {
        //Donde se crea la conexion
        $this->_connection = new PDO('mysql:host=' . $this->_host . ';dbname=' . $this->_database . ';charset=' . $this->_encode, $this->_userName, $this->_password);
        // Throw an Exception when an error occurs
        $this->_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->_connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }

    public static function getInstancia() {
        if (self::$_instancia == null) {
            self::$_instancia = new Database();
        }
        return self::$_instancia;
    }

    public function getConnecion() {
        return $this->_connection;
    }

    public function __clone() {}
}
