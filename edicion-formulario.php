<?php

include('./logica/conexion.php');
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
    <title>Document</title>
    <!-- <link rel="stylesheet" type="text/css" href="http://localhost/Biblioteca/estilos/style.css"> -->
    <link rel="stylesheet" type="text/css" href="http://localhost:8888/Biblioteca/estilos/style.css">
</head>

<body>
    <div class='box0'>
    <header class="header">
            <a href="./indice.php" class="logo">
                <img src="./assets/img_logo.png" alt="Isologo de Smart Books">
                <h1>Smart Books</h1>
            </a>

            <div class=acciones_barra>
                <a href="./indice.php">Biblioteca</a>
                <a href="./formulario.php">Crear Libro</a>
                <form action="indice.php" method="POST" class="input-wrapper">
                    <label for="buscar">
                        <input type="text" class="input" name="buscar" placeholder="Buscar...">
                        <button class="bi-search"></button>
                    </label>
                </form>
            </div>
        </header>
        <div>
            <form class="formLibros" action="./logica/actualizar.php" method="POST">
                <input class="boxDatos" type="hidden" name="id" value="<?= $row['id'] ?>">
                <input class="boxDatos" type="text" name="isbn" placeholder="ISBN" value="<?= $row['ISBN'] ?>">
                <input class="boxDatos" type="text" name="titulo" placeholder="Título" value="<?= $row['titulo'] ?>">
                <input class="boxDatos" type="text" name="autor" placeholder="Autor" value="<?= $row['autor'] ?>">
                <input class="boxDatos" type="text" name="descripcion" placeholder="Descripción" value="<?= $row['descripcion'] ?>">
                <input class="boxDatos" type="text" name="portada" placeholder="Portada" value="<?= $row['portada'] ?>">
                
                <input class="btnConfirmar" type="submit" value="Confirmar">
            </form>
        </div>
    </div>
        
</body>

</html>