<?php

	session_start();

	if(!isset($_SESSION['usuario'])){
		header('Location: index.php?erro=1');
	}

	require_once('db.class.php');

	$texto_tweet = $_POST['texto_tweet'];
	$id_usuario = $_SESSION['id_usuario'];

	
	$objDb = new db();
	$link = $objDb->conecta_mysql();
	
	$sql = " DELETE FROM post WHERE id_usuario = '$id_usuario' AND  texto_tweet = '$texto_tweet' ";

    

    if(mysqli_query($link, $sql)){
		echo 'Post excuido com sucesso!';
	} else {
		echo 'Erro ao excluir post!';
	}
?>