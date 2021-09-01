<?php
include("conexion.php");



$sql="SELECT * from usuarios";


$consulta=mysqli_query($conn,$sql);
echo "<table border=1>";
while($registro=mysqli_fetch_row($consulta)){
	echo "<tr>";
	foreach ($registro as $dato){
		echo "<td>".$dato."</td>";
	}
    echo "</tr>";
}

echo "</table>";

?>