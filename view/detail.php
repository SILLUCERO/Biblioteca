<?php
//require_once("/Applications/MAMP/htdocs/Biblioteca2/controller/BookController.php");
require_once("/xampp/htdocs/Biblioteca2/controller/BookController.php");

$controller = new BookController();
$id = $_GET["id"];
$book = $controller->getById($id);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilos/style.css">
    <title>Biblioteca</title>
</head>

<body>
    <div class="box0">
        <?php
        //require_once("/Applications/MAMP/htdocs/Biblioteca2/view/header.php");
        require_once("/xampp/htdocs/Biblioteca2/view/header.php");
        ?>

        <div class="ventana">
            <a href="./index.php" class="x"><i class="bi bi-x-square-fill"></i></a>
            <div class="container2">
                <div class="container3">
                    <img class="portada" src=<?= $book['portada'] ?>>
                </div>
                <main class="container4">
                    <div class="container5">
                        <h3><?= $book['titulo'] ?></h3>
                        <p><?= $book['autor'] ?></p>
                        <strong><?= $book['ISBN'] ?></strong>
                    </div>
                    <div class='container6'>
                        <p><?= $book['descripcion'] ?></p>
                    </div>
                </main>
            </div>

            <div class="btnsIconsDetalle">
                <a class="pencil" href="formEdit.php?id=<?= $book['id'] ?>"><i class="bi bi-pencil-fill"></i></a>
                <a onclick="alerta('Eliminado con exito!')" class="trash" href="delete.php?id=<?= $book['id'] ?>" class="trash"><i class="bi bi-trash3-fill"></i></a>
            </div>
        </div>
    </div>
    <script src="../alertas.js"></script>
</body>

</html>