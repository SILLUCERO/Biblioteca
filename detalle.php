<?php

include('./logica/conexion.php');
$con = conectar();
$ver_id=$_GET['id'];
$sql = "SELECT * FROM libros WHERE id='$ver_id'";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./detalle.css" />
    <title>Biblioteca</title>
</head>
<body>
    <header>
        
    </header>
    <?php
    while($row = mysqli_fetch_array($query)):?>
    <div class='container'>
        <h2><?=$row['titulo']?></h2>
        <p><?=$row['ISBN']?></p>
        <p><?=$row['autor']?></p>
        <p><?=$row['descripcion']?></p>
        <img src=<?=$row['portada']?>>

         <div> 
           <a href="edicion-formulario.php?id=<?= $row['id'] ?>">Editar</a>
           <a href="./logica/borrar.php?id=<?= $row['id'] ?>">Borrar</a>
         </div>
         
    </div>
    <?php endwhile;?>
</body>
</html>
