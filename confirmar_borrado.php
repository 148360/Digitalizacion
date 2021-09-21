<?php

require_once "../Estudio/configuracion/conectar_a_db.php";
$id=$_POST["id"];

$query = "UPDATE usuarios SET esta_activo = 0  WHERE id={$id}";
if ($mysqli ->query($query)){
    header("Location: index.php");
}


?>


