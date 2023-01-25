<?php

include("connection.php");
$con=conectar();
$id=$_POST['id'];
$isbn=$_POST['isbn'];
$title=$_POST['title'];
$author=$_POST['author'];
$description=$_POST['description'];
$cover=$_POST['cover'];

$sql="UPDATE libros SET  isbn='$ISBN',titulo='$titulo',author='$author',description='$description', cover=$cover'
WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
       // Header("Location: form.php");
    }
?>