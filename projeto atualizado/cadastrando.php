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
	<title>Cadastrando...</title>
	<link rel="stylesheet" type="text/css" href="css/clube.css">
</head>

<body>

<?php
$nome =  $_POST['nome'];
$login =  $_POST['email'];
$senha =  $_POST['senha'];
$sql = mysql_query("INSERT INTO usuario(nome,email,senha) VALUES ('$nome', '$login', '$senha')");
echo "Cadastro efetuado com sucesso!";

?>
</body>
</html>