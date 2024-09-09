<?php

class ConectarDB{
    private $servidor = "localhost";
    private $usuario = "root";
    private $contraseña = "root";
    private $db = "cocos_jibito";
    private $conn;

    public function __construct(){
        try{
            $this ->conn = new mysqli($this->servidor,$this->usuario,$this->contraseña,$this->db);
            if($this->conn->connect_error){
                throw new Exception("Conexion fallida: ". $this->conn->connect_error);
            }
        }catch (Exception $e){
            die("Error: " . $e->getMessage());
        }
    }
}