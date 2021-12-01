<?php
session_start();
//recibe los datos del formulario
$correo_electronico = $_POST['correo_electronico'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$nickname = $_POST['nickname'];

$conexion = mysqli_connect("localhost", "root","", "PIA9");

$sql = ("UPDATE Usuarios SET nickname= '$nickname', password= '$password', nombre='$nombre', apellido='$apellido', correo_electronico='$correo_electronico' where nickname = '$nickname'");
	
	if ($conexion->query($sql) === TRUE) {
    echo "Se actualizo el usuario";
    header("location:home.php");
    mysql_close();
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;

}      
?>