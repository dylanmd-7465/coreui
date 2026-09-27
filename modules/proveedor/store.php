<?php
include('../../config/conexion.php');
include('../../config/verified.php');

$nombre=$_POST['nombre'];
$nit=$_POST['nit'];
$regimen=isset($_POST['regimen']) ? $_POST['regimen']:'N';
$categoria= isset($_POST['categoria']) ? $_POST['categoria']: '1';
$rubro=$_POST['rubro'];
$fecha=$_POST['fecha'];
//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="INSERT INTO proveedor (nombre,nit,regimen,categoria,rubro,fecha) VALUES('{$nombre}','{$nit}','{$regimen}','{$categoria}','{$rubro}','{$fecha}')";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

header("Location: index.php");
exit;
?>