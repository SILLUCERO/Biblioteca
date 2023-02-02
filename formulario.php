<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <!-- <link rel="stylesheet" type="text/css" href="http://localhost/Biblioteca/estilos/style.css"> -->
    <link rel="stylesheet" type="text/css" href="http://localhost:8888/Biblioteca/estilos/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
        <h2 class="tipoForm">Crear Registro</h2>
        <form class="formLibros" action="./logica/crear.php" method="POST">
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

            <input class='btnCrear' onClick="crear()" type="submit" value="Crear">
        </form>
    </div>
</body>
<script src="./alertas.js"></script>
</html>