

<?php

include("coneccion.php");
$con=conectar();

$datos_id=$_GET['id'];

$sql="DELETE FROM libros  WHERE id='$datos_id'";
$query=mysqli_query($con,$sql);

    if($query){
       Header("Location: ../indice.php");
    }

//Si se ha pulsado el botón de buscar
if (isset($_POST['buscar'])) {
    //Recogemos las claves enviadas
    $keywords = $_POST['palabras_clave'];

    //Conectamos con la base de datos en la que vamos a buscar
    $conexion = mysql_connect("localhost", "root", "root");
    mysql_select_db("Biblioteca", $conexion);

    $query = "SELECT titulo, DATE_FORMAT('%d-%m-%Y') as fecha
                FROM TABLA
                WHERE status = '1'
                AND (contenido LIKE '%" . $keywords . "%'
                OR titulo LIKE '%" . $keywords . "%')
                ORDER BY fecha desc";

    $query_searched = mysql_query($query, $conexion);

    $count_results = mysql_num_rows($query_searched);

    //Si ha resultados
    if ($count_results > 0) {

        echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

        echo '<ul>';
        while ($row_searched = mysql_fetch_array($query_searched)) {
            //En este caso solo mostramos el titulo de la entrada
            echo '<li><a href="#">'.$row_searched['titulo'].')</a></li>';
        }
        echo '</ul>';
    }
    else {
        //Si no hay registros encontrados
        echo '<h2>No se encuentran resultados con los criterios de búsqueda.</h2>';
    }
}
?>