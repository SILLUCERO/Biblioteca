<?php

class BookModel
{
    public $conn;
    public $table ="libros";
    public function __construct()
    {
        //require_once("/Applications/MAMP/htdocs/Biblioteca2/config/Database.php");
        require_once("/xampp/htdocs/Biblioteca2/config/Database.php");    
            $this->BookModel = array();
            $this->db=new PDO('mysql:host=localhost;dbname=biblioteca',"root","");

    }

    public function getBooks()
    {
        $query = $this->conn->query('SELECT * FROM libros');
        return $query->fetch_all(MYSQLI_ASSOC);
    }
    public function create($table,$data)
    {
        $query = $this->conn->query("INSERT INTO $table VALUES (NULL,$data)");
        return $query->fetch_all(MYSQLI_ASSOC);
    }
}

