<?php

include("coneccion.php");
$con=conectar();

$isbn=$_POST['isbn'];
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$description=$_POST['description'];
$portada=$_POST['portada'];

$sql= "INSERT INTO `libros` (`id`, `ISBN`, `titulo`, `autor`, `descripcion`, `portada`) 
VALUES (NULL, '$isbn', '$titulo', '$autor', '$description', '$portada')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ../index.php");
} else {

}
?>