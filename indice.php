<?php

//include('./logica/conexion.php');
include 'read.php';




// $sql = "SELECT * FROM libros ";



$SQL_READ = "SELECT * FROM `libros` 
WHERE id LIKE '%$buscar%' OR
     ISBN LIKE '%$buscar%' OR
     autor LIKE '%$buscar%' OR
     titulo LIKE '%$buscar%' ";


$query = mysqli_query($con1, $SQL_READ);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://localhost/Biblioteca/estilos/style.css">

    <!-- <link rel="stylesheet" type="text/css" href="http://localhost:8888/Biblioteca/estilos/style.css"> -->

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
                <div class="formulario"> 
                    <a href="./formulario.php">Crear Registro</a>
                </div>
   
                <form action="indice.php" method="POST">
                     <input type="text" name="buscar">
                     <input type="submit" value="Buscar">
               </form> 
           </div>

    </header>

<!-- <?php

   while ($row = mysqli_fetch_array($sql_query)){ ?>

     <tr>
       <td><?= $row['id']  ?></td>
       <td><?= $row['ISBN']  ?> </td>
       <td><?= $row['titulo']  ?> </td>
       <td><?= $row['autor']  ?> </td>
     </tr>

<?php } 
?> -->



        <main class="tablero">
            <?php
            while ($row = mysqli_fetch_array($query)) : ?>
                <div class="libro">
                    <div class="titulo">
                        <h4><?= substr($row['titulo'], 0, 23)?> ...</h4>
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