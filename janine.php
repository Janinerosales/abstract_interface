<?php

abstract class Database

{
    public $conn;
    public $servername ="localhost";
    public $username ="root";
    public $password ="";
    public $dbname ="abstract";

    public function_construct($conn)
    {
        $this->conn= new msyqli($this->servername,$this->username,$this->password);

        $db = "CREATE DATABASE IF NOT EXISTS $this->dbname";
        
        $this->conn->query($db);
    }
    abstract public function db(): string;
}

class user extends Database
{
    public function db():string;
    {
        return $this->conn;
    }

}


