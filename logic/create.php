<?php

include("connection.php");
$con=conectar();

$isbn=$_POST['isbn'];
$title=$_POST['title'];
$author=$_POST['author'];
$description=$_POST['description'];
$cover=$_POST['cover'];

$sql= "INSERT INTO `libros` (`id`, `ISBN`, `titulo`, `autor`, `descripcion`, `portada`) VALUES (NULL, '$isbn', '$title', '$author', '$description', '$cover')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ../index.php");
} else {

}
?>