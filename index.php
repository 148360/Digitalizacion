<?php
require_once "../Estudio/configuracion/conectar_a_db.php";  //se hace hace el requerimiento de la conexión a la base de datos

$consulta = "select * from usuarios where esta_activo = 1";         // se realiza la consulta a los datos de la tabla usuarios
$resultado = $mysqli->query($consulta);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>

    <a href="agregar_nuevo.php"> agregar_nuevo</a>

    <table width="100%">


        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>

        <?php

        while ($fila = $resultado->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $fila["nombre"] ?></td>
                <td><?php echo $fila["correo"] ?></td>
                <td><?php echo $fila["contraseña"] ?></td>
                <td><a class="btn btn-warning" href="editar.php?id=<?php echo $fila["id"] ?>">Editar</td>
                <td><a class="btn btn-danger" href="borrar.php?id=<?php echo $fila["id"] ?>">Borrar</td>
            </tr>
        <?php  } ?>

        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>

    </table>



</body>

</html>