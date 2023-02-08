<?php
require_once("/Applications/MAMP/htdocs/Biblioteca2/controller/BookController.php");
//require_once("/xampp/htdocs/Biblioteca2/controller/BookController.php");

$controller = new BookController();
$result = $controller->getBooks();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="http://localhost/Biblioteca/estilos/style.css"> -->
    <link rel="stylesheet" type="text/css" href="../estilos/style.css">
    <title>Biblioteca2</title>
</head>

<body>
    <div class="box0">
        <header class="header">
            <a href="./indice.php" class="logo">
                <img src="../assets/img_logo.png" alt="Isologo de Smart Books">
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

            <?php if ($result) : ?>
                <?php foreach ($result as $book) : ?>
                    <div class="libro">
                        <div class="titulo">
                            <h4><?=
                                strlen($book['titulo']) < 19 ?  ($book['titulo']) : (substr($book['titulo'], 0, 19) . '...');
                                ?></h4>
                        </div>
                        <div class="box1">
                            <div class="caja">
                                <img class="boxI" src=<?= $book['portada'] ?>>
                            </div>

                            <div class="btns">
                                <a class="eye" href="detalle.php?id=<?= $book['id'] ?>">Ver info.</a>
                                <a class="pencil" href="edicion-formulario.php?id=<?= $book['id'] ?>">Editar</a>
                                <a class="trash" href="./logica/borrar.php?id=<?= $book['id'] ?>">Borrar</a>
                            </div>

                            <div class="btnsIcons">
                                <a class="eye" href="detalle.php?id=<?= $book['id'] ?>"><i class="bi bi-eye-fill"></i></a>
                                <a class="pencil" href="./edicion-formulario.php?id=<?=$book['id'] ?>"><i class="bi bi-pencil-fill"></i></a>
                                <a onclick="alerta('Se ha eliminado con exito!')" class="trash" href="./logica/borrar.php?id=<?= $row['id'] ?>" class="trash"><i class="bi bi-trash3-fill"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <h2>No hay Libros</h2>
            <?php endif; ?>
        </main>
    </div>
    <script src="./alertas.js"></script>
</body>

</html>