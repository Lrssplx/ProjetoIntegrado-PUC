<?php

	session_start();

	if(!isset($_SESSION['usuario'])){
		header('Location: index.php?erro=1');
	}

	require_once('db.class.php');

	$id_usuario = $_SESSION['id_usuario'];
	$usuario = $_POST['usuario'];
	 

	if($usuario == ''){
		die();
	}

	$objDb = new db();
	$link = $objDb->conecta_mysql();
	
	$sql = "DELETE FROM usuarios WHERE usuario = '$usuario'";

	mysqli_query($link, $sql);

?>