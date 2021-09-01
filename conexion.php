<?php
$base="proyecto414";
$conn=mysqli_connect("localhost","root","",$base);
if($conn){
	echo " ESTAS CONECTADO ";
}else{
	echo " oooops ";
}
?>