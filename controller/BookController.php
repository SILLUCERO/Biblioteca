<?php
// require_once("/Applications/MAMP/htdocs/Biblioteca2/model/BookModel.php");
class BookController
{
    public $model;

    public function __construct()
    {
        //require_once("/Applications/MAMP/htdocs/Biblioteca2/model/BookModel.php");
        require_once("/xampp/htdocs/Biblioteca2/model/BookModel.php");
        $this->model = new BookModel();
    }
    public function getbooks()
    {
        return ($this->model->getBooks() ? $this->model->getBooks() : false);
    }

    public function create($isbn, $titulo, $autor, $descripcion, $portada)
    {
        $book = $this->model->createBook($isbn, $titulo, $autor, $descripcion, $portada);
        return ($book) ? header("Location:index.php") : header("Location:formulario.php") ;
    }

    public function getById($id){
        $bookById = $this->model->getById($id);
        return $bookById;
    }

    public function updateBook($id, $isbn, $titulo, $autor, $descripcion, $portada)
    {
        $updateBook = $this->model->updateBook($id, $isbn, $titulo, $autor, $descripcion, $portada);
        return ($updateBook) ? header("Location:index.php") : header("Location:../view/edicion-formulario.php");

    }

    public function delete($id){
        $bookdeleted = $this->model->delete($id);
        return (!$bookdeleted) ? header("Location:index.php") : header("Location:../view/edicion-formulario.php");
    }
}


?>
