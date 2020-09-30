<?php 

$dbhost = "db4free.net";
$dbuser = "politecnico";
$dbpass = "Poli1234";
$dbname = "db_pokemon";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 
if (!$conn) { 
	die('No hay conexión: ' . mysql_error()); 
} 

$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

$query = mysqli_query($conn, "SELECT * FROM user WHERE Usuario = '".$usuario."' and Clave = '".$clave."'");

$nr = mysqli_num_rows($query);

if($nr == 1) {
	header("Location: home.html");
} else {
	echo utf8_decode('<script type="text/javascript">alert("Usuario o contraseña no válido");window.location.href="index.html";</script>');
}
?> 