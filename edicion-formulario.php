<?php

include('./logica/coneccion.php');
$con = conectar();


$id = $_GET['id'];

$sql = "SELECT * FROM libros WHERE id = '$id'";

$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="nav">
            <h1>Editar</h1>
            <ul>
                <li><a href="./indice.php">Libreria</a></li>
                <li><a href="./formulario.php">Crear Registro</a></li>
            </ul>
        </nav>
    </header>
    <div class="contenerdor-formulario">
        <h1>Editar este registro</h1>
        <form action="./logica/actualizar.php" method="POST" class="editar-formulario">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="isbn" placeholder="ISBN" value="<?= $row['ISBN'] ?>">
            <input type="text" name="titulo" placeholder="Título" value="<?= $row['titulo'] ?>">
            <input type="text" name="autor" placeholder="Autor" value="<?= $row['autor'] ?>">
            <input type="text" name="descripcion" placeholder="Descripción" value="<?= $row['descripcion'] ?>">
            <input type="text" name="portada" placeholder="Portada" value="<?= $row['portada'] ?>">

            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>

</html>