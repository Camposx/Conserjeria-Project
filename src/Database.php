<?php

use PDO;
use PDOException;

class Database{
    
    public $mysql;

    public function __construct()
    {
        try{
            $this->mysql = new getConnection();
        }
        catch(PDOException $e){
            echo "Connection failed with DDBB : ".$e->getMessage();
        }
    }

    private function getConnection(){
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "";
        $charset = "utf-8";

        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $pdo = new PDO("mysql:host={$host};dbname={$database};charset{$charset}", $user, $password, $options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}