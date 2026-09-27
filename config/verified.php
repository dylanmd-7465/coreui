<?php
$cuenta=$_SESSION['cuenta'];
$password=$_SESSION['password'];
$consulta="SELECT nombre,nivel,  RequeriCambPassword, activo FROM usuarios WHERE cuenta='{$cuenta}' AND password='{$password}'";
//echo $consulta
//consulta

$resultado=mysqli_query($conexion,$consulta);

if(mysqli_num_rows($resultado)==0){
    header("Location: ../../index.php?sw=2");
    exit;
}
$user=mysqli_fetch_array($resultado); 
if (isset($user['activo']) && $user['activo'] == '0') {
    session_destroy(); 
    header("Location: ../../index.php?sw=4"); 
    exit;
}
$ruta=$_SERVER['REQUEST_URI'];
$modulo=basename(dirname($ruta));
$archivo = basename(parse_url($ruta, PHP_URL_PATH));
switch ($modulo) {
    case 'users':
    case 'products':
    case 'clientes':
    case 'proveedor':    
        if (in_array($archivo, ['delete.php','activo.php']) && $user['nivel']!='A') {
         header("Location: ../../error-pages/401.html");
         exit;
        }     
          if (in_array($archivo, ['create.php','store.php','edit.php','update.php']) && $user['nivel']!='A' && $user['nivel']!='O') {
         header("Location: ../../error-pages/401.html");
         exit;
        }  
        break;
    default:
        break;
}
if ($user['RequeriCambPassword']=='S'&& $modulo!='account') {
   header("Location: ../../modules/account/change_password.php");
   exit;
}
?>