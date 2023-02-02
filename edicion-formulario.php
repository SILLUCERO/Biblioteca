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
        <h2 class="tipoForm">Editar Datos</h2>
        <form class="formLibros" action="./logica/actualizar.php" method="POST">
            <input class="boxDatos" type="hidden" name="id" value="<?= $row['id'] ?>">
            <label for="isbn">ISBN:
                <input class="boxDatos" type="text" name="isbn" placeholder="ISBN" value="<?= $row['ISBN'] ?>">
            </label>

            <label for="titulo">Titulo:
                <input class="boxDatos" type="text" name="titulo" placeholder="Título" value="<?= $row['titulo'] ?>">
            </label>
            <label for="autor">Autor o Autores:
                <input class="boxDatos" type="text" name="autor" placeholder="Autor" value="<?= $row['autor'] ?>">
            </label>

            <label for="descripcion">Descripcion:
                <input class="boxDatos" type="text" name="descripcion" placeholder="Descripción" value="<?= $row['descripcion'] ?>">
            </label>

            <label for="portada">URL portada:
                <input class="boxDatos" type="text" name="portada" placeholder="Portada" value="<?= $row['portada'] ?>">
            </label>


            <button onclick="alerta('Los datos han sido modificados')" class="btnConfirmar" type="submit">Confirmar</button>
        </form>
    </div>
    <script src="./alertas.js"></script>
</body>

</html>