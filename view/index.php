<?php
require_once("/Applications/MAMP/htdocs/Biblioteca2/controller/BookController.php");

$input = $_GET['buscar'];

$controller = new BookController();

if($input){
    $result = $controller->search($input);
}else{
    $result = $controller->getbooks();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilos/style.css">
    <title>Biblioteca2</title>
</head>

<body>
    <div class="box0">
        <?php
                require_once("/Applications/MAMP/htdocs/Biblioteca2/view/header.php");
                ?>
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
                            <div class="btnsIcons">
                                <a class="eye" href="detail.php?id=<?= $book['id'] ?>"><i class="bi bi-eye-fill"></i></a>
                                <a class="pencil" href="formEdit.php?id=<?= $book['id'] ?>"><i class="bi bi-pencil-fill"></i></a>
                                <a onclick="alerta('Se ha eliminado con exito!')" class="trash" href="delete.php?id=<?= $book['id'] ?>" class="trash"><i class="bi bi-trash3-fill"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <h2>No hay Libros</h2>
            <?php endif; ?>
        </main>
    </div>
    <script src="../alertas.js"></script>
</body>

</html>