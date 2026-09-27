<?php
include('../../config/conexion.php');
include('../../config/verified.php');

$id=$_GET['id'];
$nuevo=$_GET['nuevo'];
//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta = "UPDATE usuarios SET activo = '{$nuevo}' WHERE id = '{$id}'"; 
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

header("Location: index.php");
exit;
?>