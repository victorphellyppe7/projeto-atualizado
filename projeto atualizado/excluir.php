<?php
	
	$host = "localhost";
$user = "root";
$pass = "";
$con = mysql_connect($host,$user,$pass) or die(mysql_error());
$bd = "clube";
mysql_select_db($bd) or die(mysql_error());

$id = $_GET['id'];

$teste = mysql_query("DELETE FROM usuario WHERE id = $id");

header("Location:produto2.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Excluir</title>
</head>
<body>

</body>
</html>

