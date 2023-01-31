<?php

include 'conexion.php';

$buscar = $POST['buscar'];

$SQL_READ = "SELECT * FROM `libros` 
WHERE id LIKE '%'.$buscar.'%'  OR
     ISBN LIKE '%'.$buscar.'%'  OR
     autor LIKE '%'.$buscar.'%' OR
     titulo LIKE '%'.$buscar.'%' ";


$sql_query = mysqli_query($conn, $SQL_READ);



?>