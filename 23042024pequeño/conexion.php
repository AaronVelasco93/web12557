<?php
$user_db="root";
$pass_db="123456";
$db_name="DBweb1";
$host_db="127.0.0.1:3308";
/* $user_db="if0_36023890";
$pass_db="cQkxF3XVTdItN";
$db_name="if0_36023890_test_ICO";
$host_db="sql303.infinityfree.com"; */
$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);
if($conexion-> connect_error){
    die("La conexion peto: ".$conexion->connect_error);
}

?>