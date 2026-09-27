<?php
include('../../config/conexion.php');
include('../../config/verified.php');

$nombre=$_POST['nombre'];
$cuenta=$_POST['cuenta'];
$password=md5($_POST['password']);
$nivel=$_POST['nivel'];
$activo='1';
//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="INSERT INTO usuarios (nombre,cuenta,password,nivel,activo) VALUES('{$nombre}','{$cuenta}','{$password}','{$nivel}','{$activo}')";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

header("Location: index.php");
exit;
?>