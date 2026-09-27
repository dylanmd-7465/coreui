<?php
include('../../config/conexion.php');
include('../../config/verified.php');


$password_actual=$_POST['password_actual'];
$password_nueva=$_POST['password_nueva'];
$password_confirmar=$_POST['password_confirmar'];
if(md5($_POST['password_actual'])==$_SESSION['password']){
      if ($_POST['password_nueva']==$_POST['password_confirmar']) {
        $password_hash= md5($_POST['password_nueva']);
        $consulta= "UPDATE usuarios SET password='{$password_hash}',RequeriCambPassword='N'  WHERE cuenta='{$_SESSION['cuenta']}'"; 
        $resultado=mysqli_query($conexion,$consulta);
        $_SESSION['password'] = $password_hash;
        header("Location: index.php");
        exit;
    }else{
        header("Location: change_password.php?sw=2"); 
        exit;
    }
}else{       
   
     header("Location: change_password.php?sw=1"); 
     exit;
     
}

?>