<?php
session_start();
try{
$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
}catch(mysqli_sql_exception $e){
    die("<h2 align='center'> ERROR: no se puede conectar a la base de datos ctm </h2>");
}


?>