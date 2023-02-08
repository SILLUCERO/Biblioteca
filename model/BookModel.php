<?php

class BookModel
{
    public $Model;
    public $table ="libros";
    public function __construct()
    {
        //require_once("/Applications/MAMP/htdocs/Biblioteca2/config/Database.php");
        require_once("/xampp/htdocs/Biblioteca2/config/Database.php");    
            
    }

    public function getBooks()
    {
        $query = $this->Model->query('SELECT * FROM libros');
        return $query->fetch_all(MYSQLI_ASSOC);
    }
    public function create($table,$data)
    {
        $query = $this->Model->query("INSERT INTO $table VALUES (NULL,$data)");
        return $query->fetch_all(MYSQLI_ASSOC);
    }
}

