<?php
include('../../config/conexion.php');
include('../../config/verified.php');

$id=$_POST['id'];
$nom_comercial=$_POST['nom_comercial'];
$nom_legal=$_POST['nom_legal'];
$nit=$_POST['nit'];
$direccion=$_POST['direccion'];
$telf=$_POST['telf'];
$Rubro=$_POST['Rubro'];
//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="UPDATE clientes SET nom_comercial = '{$nom_comercial}',nom_legal='{$nom_legal}',nit='{$nit}',direccion='{$direccion}',telf='{$telf}',Rubro='{$Rubro}' WHERE id = {$id}";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

header("Location: index.php");
?>