<?php

class BookModel
{
    public $conn;

    public function __construct()
    {
        require_once("/Applications/MAMP/htdocs/Biblioteca2/config/Database.php");
        //require_once("/xampp/htdocs/Biblioteca2/config/Database.php");
        $db = new Database();
        $this->conn = $db->connection();
    }

    public function getBooks()
    {
        $query = $this->conn->query('SELECT * FROM libros');
        return $query->fetch_all(MYSQLI_ASSOC);
    }
}