<?php
include("conexion.php");
$dni=$_POST['dni'];

$sql="DELETE FROM usuarios WHERE dni='$dni'";

if(mysqli_query($conn,$sql)){
echo "listo archivo borrado";
}else{
	echo "error";
}
?>