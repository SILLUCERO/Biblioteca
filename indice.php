<?php

include('./logica/conexion.php');
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
    <!-- <link rel="stylesheet" type="text/css" href="http://localhost/Biblioteca/estilos/style.css"> -->

    <link rel="stylesheet" type="text/css" href="http://localhost:8888/Biblioteca/estilos/style.css">

    <title>Biblioteca</title>
</head>

<body>
    <div class="box0">
    <header class="nav">
            <div class="imagotipo">
                <div class="img_isologo">
                    <img src="./assets/img_logo.png" alt="Isologo de Smart Books">            
                </div>
                <div class="sb_logotipo">
                    <h2>Smart Books</h2>
                </div>
            </div>
            <div class=acciones_barra>
                <div class="biblioteca">
                    <a href="./indice.php">Biblioteca</a>
                </div>                  
                <div class="crear_formulario"> 
                    <a href="./formulario.php">Crear Registro</a>
                </div>
                <div class="buscar">
                <form class=buscar_ok action="indice.php" method="POST">
                    <input type="text" id="palabras_clave" name="keywords" size="30" maxlength="30" value="Buscar...">
                    <input type="submit" name="buscar" id="search" value="OK">
                </form>
                </div>
            </div>
        </header>
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