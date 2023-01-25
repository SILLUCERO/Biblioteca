<?php

include("connection.php");
$con=conectar();

$date_id=$_GET['id'];

$sql="DELETE FROM libros  WHERE id='$date_id'";
$query=mysqli_query($con,$sql);

    if($query){
       // Header("Location: form.php");
    }
?>