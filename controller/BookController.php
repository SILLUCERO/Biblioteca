<?php

class BookController
{
    public $model;

    public function __construct()
    {
         require_once("/Applications/MAMP/htdocs/Biblioteca2/model/BookModel.php");
        //require_once("/xampp/htdocs/Biblioteca2/model/BookModel.php");
        $this->model = new BookModel();
    }
    
    public function getBooks()
    {
        return ($this->model->getBooks() ? $this->model->getBooks() : "there is no Books");

    }
    public function createBooks()
    {
        return ($this->model->createBooks() ? $this->model->createBooks() : "no se ha creado libro");

    }
    public function updateBooks($id,$isbn, $titulo, $autor, $descripcion, $portada)
    {
        $updateBook = $this->model->updateBooks($id, $isbn, $titulo, $autor, $descripcion, $portada);
        return ($updateBook) ? header("Location:index.php") : header("Location:../view/edicion-formulario.php");

    }
}


?>