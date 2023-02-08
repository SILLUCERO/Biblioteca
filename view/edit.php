<?php
    require_once("/Applications/MAMP/htdocs/Biblioteca2/controller/BookController.php");
    $obj = new BookController();
    $isbn = $_POST['isbn'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $descripcion = $_POST['descripcion'];
    $portada = $_POST['portada'];

    $librocreado =$obj->updateBooks($id, $isbn, $titulo, $autor, $descripcion, $portada);
?>