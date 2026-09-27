<?php
include('../../config/conexion.php');
include('../../config/verified.php');

$producto=$_POST['producto'];
$detalles=$_POST['detalles'];
$pu=$_POST['pu'];
$obs=$_POST['obs'];


//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="INSERT INTO products VALUES(NULL,'{$producto}','{$detalles}','{$pu}','{$obs}')";  //consulta
//echo $consulta; exit;
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

header("Location: index.php");
?>