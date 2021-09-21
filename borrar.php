<?php
require_once "../Estudio/configuracion/conectar_a_db.php";
?>


<?php


$query = "SELECT * FROM usuarios WHERE esta_activo = 1 AND id = {$_GET["id"]};";

$resultado = $mysqli ->query($query);
$fila = $resultado -> fetch_assoc();

?>


<div class="container">
<h2 class="text-danger"> ¿Desea Eliminar el Usuario? </h2>
<hr class="text-danger"/>
<div class="fila"> 
    <div class="col-mod-12">
        <p class="text-info">
            <?php echo $fila["nombre"] ?>
        </p>
    </div>
</div>
<div class="fila">
    <div class="col-md-12">
        <p class="text-primary">
            <?php echo $fila["fecha_de_registro"] ?>
        </p>
    </div>
</div>
<hr class="text-danger"/>
<form action="confirmar_borrado.php" method="post">
    <button type="submit" class="btn btn-danger">
        Borrar
    </button>
</form>
<a href="index.php">Regresar a la lista</a>
</div>    

