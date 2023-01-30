<?php

include('./logica/coneccion.php');
$con = conectar();




$sql = "SELECT * FROM libros ";

$query = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tablero.css">
    <title>Biblioteca</title>
</head>

<body>
    <div class="box">
        <!-- <header>
            <nav class="nav">
                <h1>Libros</h1>
                <ul>
                    <li><a href="./indice.php">Libreria</a></li>
                    <li><a href="./formulario.php">Crear Registro</a></li>
                </ul>
            </nav>
        </header> -->
        <main class="tablero">
            <?php
            while ($row = mysqli_fetch_array($query)) : ?>
                <div class="libro">
                    <div class="titulo">
                        <h4><?= $row['titulo'] ?></h4>
                        <!-- <p><?= $row['autor'] ?></p> -->
                    </div>
                    <div class="box1">
                        <div class="caja">
                            <img class="boxI" src=<?= $row['portada'] ?>>
                        </div>

                        <div class="btns">
                            <a class="eye" href="edicion-formulario.php?id=<?= $row['id'] ?>">Editar</a>
                            <a class="pencil"href="">Selecionar</a>
                            <a class="trash" href="./logica/borrar.php?id=<?= $row['id'] ?>">Borrar</a>
                        </div>
                        <div class="btnsIcons">
                            <a class="eye" href="edicion-formulario.php?id=<?= $row['id'] ?>"><i class="bi bi-eye-fill"></i></a>
                            <a class="pencil" href=""><i class="bi bi-pencil-fill"></i></a>
                            <a class="trash" href="./logica/borrar.php?id=<?= $row['id'] ?>" class="trash"><i class="bi bi-trash3-fill"></i></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </main>
    </div>
</body>

</html>