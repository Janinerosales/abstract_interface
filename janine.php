<?php

abstract class Database

{
    public $conn;
    public $servername ="localhost";
    public $username ="root";
    public $password ="";
    public function_construct($conn)
    {
        $this->conn= new msyqli($this->servername,$this->username,$this->password);
    }
    abstract public function intro(): string;
}

class user extends Database
{
    public function intro():string;
    {
        return $this->conn;
    }

}
class 