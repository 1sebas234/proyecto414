<?php
include("conexion.php");
$dni=$_POST['dni'];
$email=$_POST['email'];
$sql="SELECT * from usuarios WHERE dni='$dni' AND email='$email'";
$consulta=mysqli_query($conn,$sql);
$cuantos_registros=mysqli_num_rows($consulta);
if($cuantos_registros==1){
	header("location:index.htm"); 
}else{
	header("location:http://disney.com");
}
?>