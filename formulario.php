<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="./estilos/encabezado.css" />
    <link rel="stylesheet" href="./estilos/style.css" />
    <link rel="stylesheet" href="./estilos/formulario.css" />
</head>
<body>
    <div class='box0'>
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
            <form class='formulario' action="./logica/crear.php" method="POST">
                <input class='caja' type="text" name="isbn" placeholder="ISBN">
                <input class='caja' type="text" name="titulo" placeholder="Título">
                <input class='caja' type="text" name="autor" placeholder="Autor">
                <input class='caja' type="text" name="descripcion" placeholder="Descripción">
                <input class='caja' type="text" name="portada" placeholder="Portada">
                
                <input class='btnCrear' type="submit" value="Crear">
            </form>
        </div>
    </div>
    </body>
</html>