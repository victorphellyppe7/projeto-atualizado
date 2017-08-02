<?php 

	$host = "localhost";
	$user = "root";
	$pass = "";
	$bd = clube;

	$con = mysqli_connect($host,$user,$pass,$bd);

	if(mysqli_connect_errno($con)){
	echo "erro na conexao";
	}else{
	echo"Conexao ativa";
	$id = $_GET['id'];

	$sql = "clube";
	$exec = mysqli_query($con,$sql);
	}


?>