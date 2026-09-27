<?php
include('../../config/conexion.php');
include('../../config/verified.php');

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$nit=$_POST['nit'];
$regimen = isset($_POST['regimen']) ? $_POST['regimen'] : 'N'; 
$categoria = isset($_POST['categoria']) ? $_POST['categoria'] : '1'; 
$rubro=$_POST['rubro'];
$fecha=$_POST['fecha'];
$consulta="UPDATE proveedor SET nombre = '{$nombre}',nit='{$nit}',regimen='{$regimen}',categoria='{$categoria}',rubro='{$rubro}',fecha='{$fecha}' WHERE id = {$id}";
$resultado=mysqli_query($conexion,$consulta);
header("Location: index.php");
exit;
?>