<?php

function alerta($msj){
    echo "<script>alert('$msj');</script>";
}

include("conexion.php");
$con = conectar();

$isbn = $_POST['isbn'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$descripcion = $_POST['descripcion'];
$portada = $_POST['portada'];

$sql = "INSERT INTO `libros` (`id`, `ISBN`, `titulo`, `autor`, `descripcion`, `portada`) 
VALUES (NULL, '$isbn', '$titulo', '$autor', '$descripcion', '$portada')";
$query = mysqli_query($con, $sql);

if ($query) {
    alerta("hECHO!");
    Header("Location: ../indice.php");
   
} else {
    echo "error!!";
}
