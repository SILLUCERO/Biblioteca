<?php

include("connection.php");
$con=conectar();
$id=$_POST['id'];
$isbn=$_POST['isbn'];
$title=$_POST['title'];
$author=$_POST['author'];
$description=$_POST['description'];
$cover=$_POST['cover'];

$sql= "UPDATE libros
SET ISBN='$isbn', titulo='$title', autor='$author', descripcion='$description', portada='$cover'
WHERE id='$id'";


//$sql = "UPDATE `libros` SET `ISBN`= $isbn, `titulo`=$title, `autor`= $author, `descripcion`=$description, `portada`= $cover    
//WHERE `libros`.`id` = 1"; 

$query=mysqli_query($con,$sql);

    if($query){
       // Header("Location: form.php");
    }
?>