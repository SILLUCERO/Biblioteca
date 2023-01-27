<?php

include("coneccion.php");
$con=conectar();
$id=$_POST['id'];
$isbn=$_POST['isbn'];
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$description=$_POST['description'];
$portada=$_POST['portada'];

$sql= "UPDATE libros
SET ISBN='$isbn', titulo='$titulo', autor='$autor', descripcion='$description', portada='$portada'
WHERE id='$id'";


//$sql = "UPDATE `libros` SET `ISBN`= $isbn, `titulo`=$title, `autor`= $author, `descripcion`=$description, `portada`= $cover    
//WHERE `libros`.`id` = 1"; 

$query=mysqli_query($con,$sql);

    if($query){
       // Header("Location: form.php");
    }
?>