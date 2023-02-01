<?php

include('./logica/conexion.php');
$con = conectar();


$id = $_GET['id'];

$sql = "SELECT * FROM libros WHERE id = '$id'";

$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/Biblioteca/estilos/style.css">

    <!-- <link rel="stylesheet" type="text/css" href="http://localhost:8888/Biblioteca/estilos/style.css"> -->

   <!--  <link rel="stylesheet" type="text/css" href="http://localhost:8888/Biblioteca/estilos/style.css">
 -->
</head>

<body>
    <div class='box0'>
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
        <div>
            <form class="formLibros" action="./logica/actualizar.php" method="POST">
                <input class="boxDatos" type="hidden" name="id" value="<?= $row['id'] ?>">
                <input class="boxDatos" type="text" name="isbn" placeholder="ISBN" value="<?= $row['ISBN'] ?>">
                <input class="boxDatos" type="text" name="titulo" placeholder="Título" value="<?= $row['titulo'] ?>">
                <input class="boxDatos" type="text" name="autor" placeholder="Autor" value="<?= $row['autor'] ?>">
                <input class="boxDatos" type="text" name="descripcion" placeholder="Descripción" value="<?= $row['descripcion'] ?>">
                <input class="boxDatos" type="text" name="portada" placeholder="Portada" value="<?= $row['portada'] ?>">
                
                <input class="btnConfirmar" type="submit" value="Confirmar">
            </form>
        </div>
    </div>
        
</body>

</html>