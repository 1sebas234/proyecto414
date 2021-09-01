<?php
include("conexion.php");
$dni=$_POST['dni'];
$email=$_POST['email'];

$sql="UPDATE usuarios SET email='$email' WHERE dni='$dni'";

if(mysqli_query($conn,$sql)){
echo "listo archivo actualizado";
}else{
	echo "error";
}
?>