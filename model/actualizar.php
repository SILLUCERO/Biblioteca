<?php

include("conexion.php");
$con=conectar();
$id=$_POST['id'];
$isbn=$_POST['isbn'];
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$descripcion=$_POST['descripcion'];
$portada=$_POST['portada'];

$sql= "UPDATE libros
SET ISBN='$isbn', titulo='$titulo', autor='$autor', descripcion='$descripcion', portada='$portada'
WHERE id='$id'";

$query=mysqli_query($con,$sql);

    if($query){
       Header("Location: ../indice.php");
    } else {
        echo "error!!";
    }
