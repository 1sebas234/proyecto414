<?php
include("conexion.php");
$buscar=$_POST['buscar'];
$sql="SELECT * from usuarios where apellido like '%$buscar%' and nivel='5'";
/*
HAMBURGO   
SOUTHAMPTON
NOTHINHAM
*/

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
$cuantos_registros=mysqli_num_rows($consulta);
if($cuantos_registros==1){
echo "sos ADMIN";
}else{
	echo "sos usuario normal";
}

 
?>