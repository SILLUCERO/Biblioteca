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
    <link rel="stylesheet" type="text/css" href="./estilo.css">
    <title>Biblioteca</title>
</head>
<body>
    <header class="nav">
            <div class="imagotipo">
                <div class="img_isologo">
                    <img src="./assets/img_logo.png" alt="isologo de Smart Books">            
                </div>
                <div class="sb_logotipo">
                    <h2>Smart Books</h2>
                </div>
            </div>
            <div class=acciones_barra>
                <div class="biblioteca">
                    <a href="./indice.php">Biblioteca</a>
                </div>                  
                <div class="formulario"> 
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
