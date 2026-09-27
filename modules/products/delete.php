<?php
$id=$_GET['id'];
include('../../config/conexion.php');
include('../../config/verified.php');
//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="DELETE FROM products WHERE id = '{$id}'";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

header("Location: index.php");
?>