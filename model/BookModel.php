<?php

class BookModel
{
    public $conn;
    
    public function __construct()
    {
        //require_once("/Applications/MAMP/htdocs/Biblioteca2/config/Database.php");
        require_once("/xampp/htdocs/Biblioteca2/config/Database.php");
        $db = new Database();
        $this->conn = $db->connection();
    }

    public function getBooks()
    {
        $query = $this->conn->query('SELECT * FROM libros');
        return $query->fetch_all(MYSQLI_ASSOC);
    }

    public function search($buscar)
    {
        $query = $this->conn->query("SELECT * FROM `libros` 
        WHERE id LIKE '%$buscar%' OR
             ISBN LIKE '%$buscar%' OR
             autor LIKE '%$buscar%' OR
             titulo LIKE '%$buscar%' ");
        return $query->fetch_all(MYSQLI_ASSOC);
    }

    public function createBook($isbn, $titulo, $autor, $descripcion, $portada)
    {
        $sql = "INSERT INTO `libros` (`id`, `ISBN`, `titulo`, `autor`, `descripcion`, `portada`) 
                VALUES (NULL, '$isbn', '$titulo', '$autor', '$descripcion', '$portada')";
        $query = mysqli_query($this->conn, $sql);
        return $query;
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM libros WHERE id='$id'";
        $query = mysqli_query($this->conn, $sql);
        return mysqli_fetch_array($query);
    }

    public function updateBook($id, $isbn, $titulo, $autor, $descripcion, $portada)
    {

        $sql = "UPDATE libros
        SET ISBN='$isbn', titulo='$titulo', autor='$autor', descripcion='$descripcion', portada='$portada'
        WHERE id='$id'";
        $query = mysqli_query($this->conn, $sql);

        return $query;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM libros  WHERE id='$id'";
        $query = mysqli_query($this->conn, $sql);
        //return mysqli_fetch_array($query);
        return $query;
    }
}
