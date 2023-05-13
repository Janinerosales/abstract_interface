<?php

abstract class Database

{
    public $conn;
    public $servername ="localhost";
    public $username ="root";
    public $password ="";
    public $function
    public function_construct($conn)
    {
        $this->conn= new msyqli($this->servername,$this->username,$this->password);
        $db
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
class 

