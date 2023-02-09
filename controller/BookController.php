<?php

class BookController
{
    public $model;

    public function __construct()
    {
        require_once("/Applications/MAMP/htdocs/Biblioteca2/model/BookModel.php");
        $this->model = new BookModel();
    }
    public function getbooks()
    {
        return ($this->model->getBooks() ? $this->model->getBooks() : false);
    }
    public function search($buscar)
    {
        $input = $this->model->search($buscar);
        return ($input) ? $input : false;
    }

    public function create($isbn, $titulo, $autor, $descripcion, $portada)
    {
        $book = $this->model->createBook($isbn, $titulo, $autor, $descripcion, $portada);
        return ($book) ? header("Location:index.php") : false ;
    }

    public function getById($id){
        $bookById = $this->model->getById($id);
        return $bookById;
    }

    public function updateBook($id, $isbn, $titulo, $autor, $descripcion, $portada)
    {
        $updateBook = $this->model->updateBook($id, $isbn, $titulo, $autor, $descripcion, $portada);
        return ($updateBook) ? header("Location:index.php") : false;

    }

    public function delete($id){
        $bookdeleted = $this->model->delete($id);
        return (!$bookdeleted) ? header("Location:index.php") : false;
    }
}


?>
