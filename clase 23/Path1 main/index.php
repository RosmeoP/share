<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>


    <!-- <h1>Bienvenidos/as</h1> -->
    <a href="registrar.php">Registrar</a>
    <table border="1">
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>TELEFONO</th>
                <th>GENERO</th>
            </tr>
           
<?php

$conexion->conectar();
    {
        echo "<tr>";
            echo"<td>".$filas[0]."</td>";
            echo"<td>".$filas[1]."</td>";
            echo"<td>".$filas[2]."</td>";
            echo"<td>".$filas[3]."</td>";
            echo"</tr>"; 
     }

    $conexion->desconectar();
    $conexion->conectar();
    $ejecutar_consulta= $conexion->conexion->query($consulta) ;
     while ($filas=mysqli_fetch_row($ejecutar_consulta)){
        echo "<tr>";
            echo"<td>".$filas[0]."</td>";
            echo"<td>".$filas[1]."</td>";
            echo"<td>".$filas[2]."</td>";
            echo"<td>".$filas[3]."</td>";
            echo"</tr>"; 
     }
 ?>
 </table>

 </form>
</body>
</html>

<?php
$conexion->conectar();
?>
