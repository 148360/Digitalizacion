<?php
var_dump($_POST);
require_once "../Estudio/configuracion/conectar_a_db.php";

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];

$query = "INSERT INTO usuarios (nombre, correo, contraseña, fecha_de_registro, esta_activo) values ('{$nombre}','{$correo}','{$contraseña}',now(),1);";
if ($mysqli->query($query)) {
    header("location: index.php");
} else {
    echo $mysqli->error;
}
