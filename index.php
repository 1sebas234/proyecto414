<?php
session_start();
if(isset($_SESSION['name'])){
?>

<html>
<head>
<title> SOPORTE TECNICO 414 PHP </title> 
</head>
<body>
<h1><center>BIENVENIDO A LA WEB DE SOPORTE TECNICO 414 PHP </center></h1> 
<a href="cerrar.php">cerrar sesion</a>  
</body>
</html>

<?php
}else{
	echo "no iniciaste sesion";
}
?>