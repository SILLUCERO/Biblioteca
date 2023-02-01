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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://localhost/Biblioteca/estilos/style.css">
    <title>Biblioteca</title>
</head>

<body>
    <div class="box0">
    <div class=acciones_barra>
                <div class="biblioteca">
                    <a href="./indice.php">Biblioteca</a>
                </div>                  
                <div class="crear_formulario"> 
                    <a href="./formulario.php">Crear libro</a>
                </div>
                <div class="buscar">
                <form class=buscar_ok action="indice.php" method="POST">
                    <input type="text" id="palabras_clave" name="keywords" size="30" maxlength="30" value="Buscar...">
                    <input type="submit" name="buscar" id="search" value="OK">
                </form>
                </div>
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
                        </div>
                        <div class='container6'>
                            <p><strong><?= $row['ISBN'] ?></strong></p>
                            <p><?= $row['descripcion'] ?></p>
                        </div>
                    </main>
                </div>

                <div class="btnsIconsDetalle">
                    <a class="pencil" href="edicion-formulario.php?id=<?= $row['id'] ?>"><i class="bi bi-pencil-fill"></i></a>
                    <a class="trash" href="./logica/borrar.php?id=<?= $row['id'] ?>" class="trash"><i class="bi bi-trash3-fill"></i></a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</body>

</html>