<?php 

class Conexao{
    
    private static $instance = null;
    public $conn;

    private function __construct(){
        try {
            $this->conn = new PDO("mysql:dbname=cadastro;localhost","root", "");
        } catch (Exception $e) {
            die("Erro na conexão com MySQL! " . $e->getMessage());
        }
    }

    static function getInstance()
    {
        
        if (self::$instance == NULL)
            self::$instance = new Conexao();   
        return self::$instance;                     
    }

    private function __clone() {}
}

