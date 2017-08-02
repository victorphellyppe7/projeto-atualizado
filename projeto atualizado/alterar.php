
<?php
	
	$host = "localhost";
$user = "root";
$pass = "";
$con = mysql_connect($host,$user,$pass) or die(mysql_error());
$bd = "clube";
mysql_select_db($bd) or die(mysql_error());

$id = $_POST['nome'];

$teste = mysql_query("UPDATE usuario SET nome='$nome', email='$email' WHERE id=$id");

header("Location:produto2.php");

?>
