<?php
include('../../config/conexion.php');
include('../../config/verified.php');

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$cuenta=$_POST['cuenta'];
$nivel=$_POST['nivel'];
if($_POST['password']==''){
       $consulta = "UPDATE usuarios SET nombre = '{$nombre}', cuenta='{$cuenta}', nivel='{$nivel}' WHERE id = {$id}";
}else{        
        $password=md5($_POST['password']);
        $consulta = "UPDATE usuarios SET nombre  = '{$nombre}', cuenta='{$cuenta}',RequeriCambPassword='S', password='{$password}', nivel='{$nivel}' WHERE id = {$id}";
        
}
$resultado=mysqli_query($conexion,$consulta);
header("Location: index.php");
?>