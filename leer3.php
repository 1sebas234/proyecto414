<?php
include("conexion.php");

$sql="SELECT nombre, apellido, email from usuarios";
$consulta=mysqli_query($conn,$sql);
echo "<table border=1>";
echo "<tr>";
echo "<td>EMAIL</td><td>APELLIDO</td><td>NOMBRE</td>";
echo "</tr>";
while($registro=mysqli_fetch_row($consulta)){
	echo "<tr>";
	
		echo "<td>".$registro[2]."</td>";
		echo "<td>".$registro[1]."</td>";
		echo "<td>".$registro[0]."</td>";
	
	echo "</tr>";
}
echo "</table>";



?>