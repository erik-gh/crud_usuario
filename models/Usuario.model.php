<?php

require_once "../config/db_connection.php";
//require_once "../config/db_connection_1.php";

class UsuarioModel {

    protected $db;

    function __construct() {
        $instancia =  Database::getInstancia();
        $this->db = $instancia->getConnecion(); //db_connection.php        
//        $this->db = coneccionDB(); // db_connection_1.php
    }

    function __destruct() {
        $this->db = null;
    }

    // Actualiza un usuario
    public function saveUsuario($arg_first_name, $arg_last_name, $arg_email, $arg_user_id) {
        $query = null;
        if ($arg_user_id === null) {
            $query = $this->db->prepare("INSERT INTO users(first_name, last_name, email) VALUES(:first_name, :last_name, :email)");
        } else {
            $query = $this->db->prepare("UPDATE users SET first_name = :first_name, last_name = :last_name, email = :email WHERE id_user = :id_user");
            $query->bindParam(":id_user", $arg_user_id);
        }
        $query->bindParam(":first_name", $arg_first_name);
        $query->bindParam(":last_name", $arg_last_name);
        $query->bindParam(":email", $arg_email);
        $query->execute();
    }

    // Muestra filas de la tabla usuario 
    public function readUsuarios() {
        $query = $this->db->prepare("SELECT * FROM users");
        $query->execute();
        return $query->fetchAll(); //retorna un array de objetos, FETCH_OBJ
    }

    // Elimina un usuario
    public function deleteUsuario($arg_user_id) {
        $query = $this->db->prepare("DELETE FROM users WHERE id_user = :id_user");
        $query->bindParam(":id_user", $arg_user_id);
        $query->execute();
    }

    // Muestra el detalle de un usuario
    public function detailsUsuario($arg_user_id) {
        $query = $this->db->prepare("SELECT * FROM users WHERE id_user = :id_user");
        $query->bindParam(":id_user", $arg_user_id);
        $query->execute();
        return $query->fetch(); //devuelve un objeto de una fila
    }

}

?>