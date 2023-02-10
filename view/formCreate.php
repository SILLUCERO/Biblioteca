<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Registro</title>
    <link rel="stylesheet" type="text/css" href="../estilos/style.css">
</head>

<body>
    <div class="box0">
        <?php
        //require_once("/Applications/MAMP/htdocs/Biblioteca2/view/header.php");
        require_once("/xampp/htdocs/Biblioteca2/view/header.php");
        ?>
        <h2 class="tipoForm">Crear Registro</h2>

        <form class="formLibros" action="./store.php" method="POST">
        <a href="./index.php" class="x"><i class="bi bi-x-square-fill"></i></a>
            <label for="isbn">ISBN:
                <input id="isbn" class="boxDatos" type="text" name="isbn" placeholder="987-XXXXXXXXX">
            </label>
            <label for="titulo">Titulo:
                <input class="boxDatos" type="text" name="titulo" placeholder="">
            </label>
            <label for="autor">Autor o Autores:
                <input class="boxDatos" type="text" name="autor" placeholder="">
            </label>
            <label for="descripcion">Descripcion:
                <input class="boxDatos" type="text" name="descripcion" placeholder="Descripcion breve...">
            </label>
            <label for="portada">URL portada:
                <input class="boxDatos" type="text" name="portada" placeholder="../archivo/imagen">
            </label>

            <button onclick="alerta('Se ha creado con exito!')" class='btnCrear' type="submit">Crear</button>
        </form>
    </div>
    <script src="../alertas.js"></script>
</body>

</html>