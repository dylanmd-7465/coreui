<?php
include('../../config/conexion.php');
include('../../config/verified.php');

$id=$_POST['id'];
$producto=$_POST['producto'];
$detalles=$_POST['detalles'];
$pu=$_POST['pu'];
$obs=$_POST['obs'];

//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="UPDATE products SET producto = '{$producto}',
detalles='{$detalles}',pu='{$pu}',obs='{$obs}' WHERE id = {$id}";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

header("Location: index.php");
?> 