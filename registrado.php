<?php
include("conexion.php");
$dni=$_POST['dni'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$nivel=1;
$sql="INSERT INTO usuarios (dni, nombre, apellido, email, nivel) VALUES ('$dni','$nombre','$apellido','$email','$nivel')";

if(mysqli_query($conn,$sql)){
echo "listo";
}else{
	echo "error";
}
?>