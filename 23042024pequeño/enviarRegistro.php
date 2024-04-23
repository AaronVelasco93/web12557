<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');

$buscarusuario="SELECT * FROM  persona WHERE nombre_usuario ='$_POST[nombre_usuario]'";

$resultado = $conexion -> query($buscarusuario);
$count =mysqli_num_rows($resultado);
echo "Encontrado";
if($count==1){
    echo"El usuario ya esta registrado";
    echo "<a href='./index.php'>Nuevo registro</a>";

}else{

    mysqli_query($conexion,"INSERT INTO persona (
        nombre_usuario)
        VALUES(
            '$_POST[nombre_usuario]'
        )");
        echo "<br> <h1>Usuario creado con exito</h1>";
        echo "<a href='./index.php'>Puedes generar un Nuevo registro</a>";
}
 

?>