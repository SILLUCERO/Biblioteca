<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <!-- <link rel="stylesheet" type="text/css" href="http://localhost/Biblioteca/estilos/style.css"> -->
    <link rel="stylesheet" type="text/css" href="http://localhost:8888/Biblioteca/estilos/style.css">
</head>
<body>
    <div class="box0">
        <header>
            <nav class="nav">
                <h1>Añadir</h1>
                <ul>
                    <li><a href="./indice.php">Libreria</a></li>
                    <li><a href="./formulario.php">Crear Registro</a></li>
                </ul>
            </nav>
        </header>
        <div>
            <form class="formLibros" action="./logica/crear.php" method="POST">
                <input class="boxDatos" type="text" name="isbn" placeholder="ISBN">
                <input class="boxDatos" type="text" name="titulo" placeholder="Título">
                <input class="boxDatos" type="text" name="autor" placeholder="Autor">
                <input class="boxDatos" type="text" name="descripcion" placeholder="Descripción">
                <input class="boxDatos" type="text" name="portada" placeholder="Portada">
                
                <input class='btnCrear' type="submit" value="Crear">
            </form>
        </div>
    </div>
    </body>
</html>