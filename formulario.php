<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/Biblioteca/estilos/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="http://localhost:8888/Biblioteca/estilos/style.css"> -->
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