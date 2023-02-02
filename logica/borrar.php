<?php

include("conexion.php");
$con = conectar();

$datos_id = $_GET['id'];

$sql = "DELETE FROM libros  WHERE id='$datos_id'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: ../indice.php");
} else {
    echo "error!!";
}
