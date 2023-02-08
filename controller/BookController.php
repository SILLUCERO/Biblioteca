<?php

class BookController
{
    public $model;

    public function __construct()
    {
        //require_once("/Applications/MAMP/htdocs/Biblioteca2/model/BookModel.php");
        require_once("/xampp/htdocs/Biblioteca2/model/BookModel.php");
        $this->model = new BookModel();
    }
    
    public function getBooks()
    {
        return ($this->model->getBooks() ? $this->model->getBooks() : "there is no Books");

    }
    public function createBook()
    {
        $isbn = $_POST['isbn'];
        $titulo = $_POST['titulo'];
        $autor =  $_POST['autor'];  
        $descripcion =  $_POST['descripcion'];
        $portada =  $_POST['portada'];

        $data = "".$isbn."','".$titulo."','".$autor."','".$descripcion."','".$portada."";
        $book = new BookModel();
        $dato = $book->create("libros", $data);

        if ($dato) {
            alerta("hECHO!");
            Header("Location: ./view/index.php");
           
        } else {
            echo "error!!";
        }
    }
}

 


?>