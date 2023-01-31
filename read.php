<?php

// include 'logica/conexion.php';

if(!isset($_POST['buscar'])){
     $_POST['buscar'] = "";

$buscar = $_POST['buscar'];

}

$buscar = $_POST['buscar'];

$SQL_READ = "SELECT * FROM `libros` 
WHERE id LIKE '%$buscar%' OR
     ISBN LIKE '%$buscar%' OR
     autor LIKE '%$buscar%' OR
     titulo LIKE '%$buscar%' ";


$sql_query = mysqli_query($con, $SQL_READ);



?>