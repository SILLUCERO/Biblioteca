<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <form action="insertar.php" method="POST">
        <input type="text" name="isbn" placeholder="ISBN">
        <input type="text" name="titulo" placeholder="Título">
        <input type="text" name="autor" placeholder="Autor">
        <input type="text" name="descripcion" placeholder="Descripción">
        <input type="file" name="portada" placeholder="Portada">

        <input type="submit" value="Añadir">
    </form>
</body>
</html>