<?php

include './logica/read.php';

$SQL_READ = "SELECT * FROM `libros` 
WHERE id LIKE '%$buscar%' OR
     ISBN LIKE '%$buscar%' OR
     autor LIKE '%$buscar%' OR
     titulo LIKE '%$buscar%' ";


$query = mysqli_query($con1, $SQL_READ);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        <main class="tablero">
            <?php
            while ($row = mysqli_fetch_array($query)) : ?>
                <div class="libro">
                    <div class="titulo">
                        <h4><?=

                        strlen($row['titulo']) < 20 ?  ($row['titulo']) : (substr($row['titulo'], 0, 20) . '...');


                         ?></h4>
                    </div>
                    <div class="box1">
                        <div class="caja">
                            <img class="boxI" src=<?= $row['portada'] ?>>
                        </div>

                        <div class="btns">
                            <a class="eye" href="detalle.php?id=<?= $row['id'] ?>">Ver info.</a>
                            <a class="pencil" href="edicion-formulario.php?id=<?= $row['id'] ?>">Editar</a>
                            <a class="trash" href="./logica/borrar.php?id=<?= $row['id'] ?>">Borrar</a>
                        </div>

                        <div class="btnsIcons">
                            <a class="eye" href="detalle.php?id=<?= $row['id'] ?>"><i class="bi bi-eye-fill"></i></a>
                            <a class="pencil" href="edicion-formulario.php?id=<?= $row['id'] ?>"><i class="bi bi-pencil-fill"></i></a>
                            <a class="trash" href="./logica/borrar.php?id=<?= $row['id'] ?>" class="trash"><i class="bi bi-trash3-fill"></i></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </main>
    </div>
</body>

</html>