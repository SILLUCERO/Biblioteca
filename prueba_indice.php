<?php

include('./logica/conexion.php');
$con = conectar();


$sql = "SELECT * FROM libros ";

$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">


<form action="prueba_indice.php" method="POST">
    <input type="text" name="buscar">
    <input type="submit" value="Buscar">
</form> 

<?php
   
   include 'read.php';

   while ($row = mysqli_fetch_array($sql_query)){ ?>

     <tr>
       <td><?= $row['id']  ?></td>
       <td><?= $row['ISBN']  ?> </td>
       <td><?= $row['titulo']  ?> </td>
       <td><?= $row['autor']  ?> </td>
     </tr>

<?php } 
?>



</html>