<?php
include("conexion.php");

$sql="SELECT email, apellido, nombre from usuarios";
$consulta=mysqli_query($conn,$sql);
echo "<table border=1>";
echo "<tr>";
echo "<td>EMAIL</td><td>APELLIDO</td><td>NOMBRE</td>";
echo "</tr>";
while($registro=mysqli_fetch_row($consulta)){
	echo "<tr>";
	foreach($registro as $dato){
		echo "<td>".$dato."</td>";
	}
	echo "</tr>";
}
echo "</table>";



?>