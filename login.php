<?php
include('config/conexion.php'); //conctado
//recibo las variables
$cuenta=$_POST['cuenta'];
$password=md5($_POST['password']);
$consulta="SELECT * FROM usuarios WHERE cuenta='{$cuenta}' AND password='{$password}'";

//echo $consulta; exit;

//consulta
$resultado=mysqli_query($conexion,$consulta);
if(mysqli_num_rows($resultado)!=0){
    $_SESSION['cuenta']=$cuenta;
    $_SESSION['password']=$password;
    header("Location: modules/home/index.php");
}
else {
    header("Location: index.php?sw=1");
}
?>