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
}


?>