<?php

require_once "../Estudio/configuracion/conectar_a_db.php";

$usuario_id = $_GET['id'];
$consulta = "select usuarios.id, usuarios.nombre, usuarios.correo, usuarios.contraseña from usuarios where id={$usuario_id}";
$resultado = $mysqli->query($consulta);


?>
<?php

$fila = $resultado->fetch_assoc() ?>

<form action="actualizar.php" method="POST">

    <br>
    <br>

    <input type="hidden" id="id" name="id" value="<?php echo $fila["id"] ?>" /> <br><br>

    <label for="lnombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" value="<?php echo $fila["nombre"] ?>" /> <br><br>

    <label for="lcorreo">Correo:</label><br>
    <input type="text" id="correo" name="correo" value="<?php echo $fila["correo"] ?>" /> <br><br>

    <label for="lcontraseña">Contraseña:</label><br>
    <input type="text" id="contraseña" name="contraseña" value="<?php echo $fila["contraseña"] ?>" /> <br><br>

    <button type="submit">Guardar</button>
   

</form>

<a href="index.php">Regresar a la lista</a>