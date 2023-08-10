
<?php

	session_start();

	if(!isset($_SESSION['usuario'])){
		header('Location: index.php?erro=1');
	}

	require_once('db.class.php');

	$id_usuario = $_SESSION['id_usuario'];
	$usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);

	if($id_usuario == '' || $usuario  == ''){
		die();
	}

	$objDb = new db();
	$link = $objDb->conecta_mysql();
	
	$sql = ( "UPDATE usuarios SET  usuario = '$usuario' WHERE id='$id_usuario'") ;

	
    if(mysqli_query($link, $sql)){
		echo 'Usuário alterado com sucesso!';
	} else {
		echo 'Erro ao alterar o usuário!';
	}
?>















 