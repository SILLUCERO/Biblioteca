<?php

include('./logica/conexion.php');
$con = conectar();
$ver_id = $_GET['id'];
$sql = "SELECT * FROM libros WHERE id='$ver_id'";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="http://localhost/Biblioteca/estilos/style.css"> -->
    <link rel="stylesheet" type="text/css" href="http://localhost:8888/Biblioteca/estilos/style.css">
    <title>Biblioteca</title>
</head>

<body>
    <div class="box0">
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
        <?php
        while ($row = mysqli_fetch_array($query)) : ?>
        <div class="ventana">
            <div class="container2">
                <div class="container3">
                    <img class="portada" src=<?= $row['portada'] ?>>
                </div>
                <main class="container4">
                    <div class="container5">
                        <h3><?= $row['titulo'] ?></h3>
                        <p><?= $row['autor'] ?></p>
                        <strong><?= $row['ISBN'] ?></strong>
                    </div>
                    <div class='container6'>
                        <p><?= $row['descripcion'] ?></p>
                    </div>
                </main>
            </div>

            <div class="btnsIconsDetalle">
                <a class="pencil" href="edicion-formulario.php?id=<?= $row['id'] ?>"><i class="bi bi-pencil-fill"></i></a>
                <a onclick="alerta('Eliminado con exito!')" class="trash" href="./logica/borrar.php?id=<?= $row['id'] ?>" class="trash"><i class="bi bi-trash3-fill"></i></a>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <script src="./alertas.js"></script>
</body>

</html>