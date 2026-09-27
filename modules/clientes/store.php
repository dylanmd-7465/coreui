<?php
include('../../config/conexion.php');
include('../../config/verified.php');

$nom_comercial=$_POST['nom_comercial'];
$nom_legal=$_POST['nom_legal'];
$nit=$_POST['nit'];
$direccion=$_POST['direccion'];
$telf=$_POST['telf'];
$Rubro=$_POST['Rubro'];
//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="INSERT INTO clientes  VALUES(NULL,'{$nom_comercial}','{$nom_legal}','{$nit}','{$direccion}','{$telf}','{$Rubro}')";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

header("Location: index.php");
?>