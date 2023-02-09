<?php
require_once("/Applications/MAMP/htdocs/Biblioteca2/controller/BookController.php");


$controller = new BookController();
$id = $_GET["id"];
$result = $controller->getById($id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Formulario</title>
    <link rel="stylesheet" type="text/css" href="../estilos/style.css">
</head>

<body>
    <div class='box0'>
        <?php
        require_once("/Applications/MAMP/htdocs/Biblioteca2/view/header.php");
        ?>
        <h2 class="tipoForm">Editar Datos</h2>

        <form class="formLibros" action="./edit.php" method="POST">
            <a href="./index.php" class="x"><i class="bi bi-x-square-fill"></i></a>

            <input class="boxDatos" type="hidden" name="id" value="<?= $result['id'] ?>">
            <label for="isbn">ISBN:
                <input class="boxDatos" type="text" name="isbn" placeholder="ISBN" value="<?= $result['ISBN'] ?>">
            </label>

            <label for="titulo">Titulo:
                <input class="boxDatos" type="text" name="titulo" placeholder="Título" value="<?= $result['titulo'] ?>">
            </label>
            <label for="autor">Autor o Autores:
                <input class="boxDatos" type="text" name="autor" placeholder="Autor" value="<?= $result['autor'] ?>">
            </label>

            <label for="descripcion">Descripcion:
                <input class="boxDatos" type="text" name="descripcion" placeholder="Descripción" value="<?= $result['descripcion'] ?>">
            </label>

            <label for="portada">URL portada:
                <input class="boxDatos" type="text" name="portada" placeholder="Portada" value="<?= $result['portada'] ?>">
            </label>
            <button onclick="alerta('Los datos han sido modificados')" class="btnConfirmar" type="submit">Confirmar</button>
        </form>
    </div>
    <script src="../alertas.js"></script>
</body>

</html>