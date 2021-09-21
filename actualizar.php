<?php

require_once "../Estudio/configuracion/conectar_a_db.php";


$id=$_POST["id"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];

$query = "UPDATE usuarios SET nombre='{$nombre}', correo='{$correo}', contraseña='{$contraseña}' WHERE id={$id}";

if ($mysqli->query($query)) {
    header("location: index.php");
} else {
    echo $mysqli->error;
}


?>
