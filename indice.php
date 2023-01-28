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
    <title>Biblioteca</title>
</head>
<body>
    <header>
        <nav class="nav">
            <h1>Biblioteca</h1>
            <ul>
                <li><a href="./indice.php">Libreria</a></li>
                <li><a href="./formulario.php">Crear Registro</a></li>
            </ul>
        </nav>
    </header>
    <?php
    while($row = mysqli_fetch_array($query)):?>


    <div>
        <h2><?= $row['titulo']?></h2>
        <p><?= $row['autor']?></p>
        <img src=<?= $row['portada']?>>

         <div> 
           <a href="edicion-formulario.php?id=<?= $row['id'] ?>">Editar</a>
           <a href="">Selecionar</a>
           <a href="./logica/borrar.php?id=<?= $row['id'] ?>">Borrar</a>
         </div>
         
    </div>
    <?php endwhile;?>
</body>
</html>
