<?php


$mysqli = new mysqli ("localhost", "root", "", "andromeda");
if($mysqli->connect_errno){
    echo "Error de Conexión: ".$mysqli->connect_errno;
}
$mysqli->query("SET NAMES 'utf8'");






?>