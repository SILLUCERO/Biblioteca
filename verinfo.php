<!-- <?php

include('./logica/conexion.php');
$con = conectar();
$id=$_POST['id'];
$isbn=$_POST['isbn'];
$title=$_POST['title'];
$author=$_POST['author'];
$description=$_POST['description'];
$cover=$_POST['cover'];


$ver_id=$_GET['id'];

$sql = "SELECT * FROM libros WHERE id='$ver_id'";

$query = mysqli_query($con, $sql);
if($query){
    // Header("Location: form.php");
 }

?> -->
