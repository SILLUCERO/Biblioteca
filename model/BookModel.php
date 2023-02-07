<?php

class BookModel
{
    public $conn;
    public $table ="libros";
    public function __construct()
    {
        require_once("/Applications/MAMP/htdocs/Biblioteca2/config/Database.php");
        //require_once("C:/xampp/htdocs/Biblioteca2/config/Database.php");
        $db = new Database();
        $this->conn = $db->connection();
    }

    public function getBooks()
    {
        $query = $this->conn->query('SELECT * FROM libros');
        return $query->fetch_all(MYSQLI_ASSOC);
    }
    public function createBooks()
    {
    $isbn = $_POST['isbn'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $descripcion = $_POST['descripcion'];
    $portada = $_POST['portada'];
        $query = $this->conn->query("INSERT INTO".$this->table." (`id`, `ISBN`, `titulo`, `autor`, `descripcion`, `portada`) 
        VALUES (NULL, '$isbn', '$titulo', '$autor', '$descripcion', '$portada')");
        return $query->fetch_all(MYSQLI_ASSOC);
    }
}

