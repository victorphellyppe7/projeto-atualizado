<?php
include_once("conexao.php");
?>
<?php
session_start();
if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
header("Location:perfil.php");
} else{
header("");
}


?>



<html>
	<head>
		<META charset="UTF-8"> 
		<title>Clube do Livro | Meu Perfil </title>
		<link href="css/clube.css" rel="stylesheet">
	</head>
	<body class="fundo2">
	
		<nav id="menu">
		<ul>	<li><a class="links" href="index2.php"><b>Home</b></a></li>
			<li><a class="links" href="produto2.php"><b>Usuários</b></a></li>
			<li><a class="links" href="perfil.php"><b>Meu Perfil</b></a></li>
			<li><a class="links" href="logout.php"><b>Logout</b></a></li>
		</ul>
		</nav>
		
		<div class="geral1">         
          	<h1 class="Tamletra">Envio de Livros</h1>


<form ></form>



			<p style="Color: blue">
			<form action="upload.php" method="POST" enctype="multipart/form-data">
Arquivo: <input type="file" name="file"><br>
<input type="submit" value="Enviar">
<input type="reset" value="Apagar">
</form>

			</p>
           
        </div>
        
         	
    	

</div>
		
	</body>
</html>