
<html>
<head>
<meta charset="utf-8">
	<title>Lista de Usuários</title>
	<?php
$parametro = filter_input(INPUT_GET, "parametro");
$mysqllink = mysql_connect("localhost","root","");
mysql_select_db("clube");
if ($parametro) {
	$dados = mysql_query("SELECT * FROM usuario WHERE  nome LIKE '$parametro%' ORDER BY nome");
	} else {
		$dados = mysql_query("SELECT * FROM usuario order by nome");
	}

	$linha = mysql_fetch_assoc($dados);
	$total = mysql_num_rows($dados);
	?>
	<?php   $id=filter_input(INPUT_GET,"id");
			$nome=filter_input(INPUT_GET,"nome");
			$email=filter_input(INPUT_GET,"email");
	?>
	
</head>
<body>
<p>
	<form action=" <?php echo $_SERVER['PHP_SELF']; ?> ">
		<input type="text" name="parametro">
		<input type="submit" value="Buscar" >
	</form>
</p>

<fieldset>
<table border="1">
	<tr><td>id</td>
	<td>nome</td>
	<td>email</td></tr>

</table>
</fieldset>
<?php
if ($total) { do {
?>
<fieldset border="1">
<table>
<tr><td><?php echo $linha['id']?></td>
	<td><?php echo $linha['nome']?></td>
	<td><?php echo $linha['email']?></td>
	<td><a href="alterar.php?id=<?php echo $linha['id'] . $linha['nome'] . $linha['email'] ?>">Alterar</a></td>
	<td ><a href="excluir.php?id=<?php echo $linha['id'] ?>">Excluir</a></td>
</tr>
</table>
</fieldset>
<?php
	} while ($linha = mysql_fetch_assoc($dados));
	mysql_free_result($dados);
	}
	mysql_close($mysqllink);
?>

</body>
</html>