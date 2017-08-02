<?php
$host = "localhost";
$user = "root";
$pass = "";
$con = mysql_connect($host,$user,$pass) or die(mysql_error());
$bd = "clube";
mysql_select_db($bd) or die(mysql_error());
?>

<html>
<head>
	<title>Autenticando usuario</title>
	<script type="text/javascript">
		function loginsuccessfully(){
			setTimeout("window.location='perfil.php'",1000);
		}
		function loginfaield(){
			setTimeout("window.location='login.php'",1000);
		}
	</script>
</head>
<body>

<?php
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = mysql_query("SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'") or die(mysql_error());
$row = mysql_num_rows($sql);
if ($row > 0) {
	session_start();
	$_SESSION['email']=$_POST['email'];
	$_SESSION['senha']=$_POST['senha'];
	echo "bem vindo!!";
	echo "<script>loginsuccessfully()</script>";
	} else {
		echo "email ou senha invalidos tente novamente!";
		echo "<script>loginfaield()</script>";
	}

?>

</body>
</html>
