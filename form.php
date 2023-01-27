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
            <h1>Añadir</h1>
            <ul>
                <li><a href="./index.php">Libreria</a></li>
                <li><a href="./form.php">Crear Registro</a></li>
            </ul>
        </nav>
    </header>
    <form action="./logic/create.php" method="POST">
        <input type="text" name="isbn" placeholder="ISBN">
        <input type="text" name="titulo" placeholder="Título">
        <input type="text" name="autor" placeholder="Autor">
        <input type="text" name="descripcion" placeholder="Descripción">
        <input type="text" name="portada" placeholder="Portada">

                <input type="submit" value="Añadir">
            </form>
</body>
</html>