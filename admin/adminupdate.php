<?php
	include('connect.php');
	date_default_timezone_set('America/Sao_Paulo');
	$id = $_POST['id'];
	$titulo = $_POST['titulo'];
	$texto = $_POST['texto'];
	$texto = nl2br($texto);
	$hoje = date("d/m/y"); 
	$sql = "UPDATE posts 
			SET titulo = '$titulo', texto = '$texto', hoje = '$hoje'
			WHERE id = '$id'";
	if (mysqli_query($conn, $sql)) {
		echo "Post alterado com sucesso!";
	} 

?>

<br><br><a href="index.php">Voltar</a>