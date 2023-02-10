<?php
//require_once("/Applications/MAMP/htdocs/Biblioteca2/controller/BookController.php");
require_once("/xampp/htdocs/Biblioteca2/controller/BookController.php");

$id = $_GET['id'];

$controller = new BookController();
$result = $controller->delete($id);
?>