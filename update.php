<?php

include("connection.php");
$con=conectar();
$date_id=$_GET['id'];
$isbn=$_POST['ISBN'];
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$descripción=$_POST['descripción'];

$sql="UPDATE libros SET  isbn='$ISBN',titulo='$titulo',autor='$autor' WHERE id='$date_id'";
$query=mysqli_query($con,$sql);

    if($query){
       // Header("Location: form.php");
    }
?>