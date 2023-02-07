<?php

class Database{
    
    private $servername = "localhost";
    private $username = "root";
    // // private $password = "root";
    private $password = "root";
    private $db="biblioteca";

    public function connection()
    {
        try {
            $conn = new mysqli ($this->servername, $this->username, $this->password, $this->db);
            return $conn;
        } catch (Throwable $th) {
            var_dump($th);
        }
    } 
}