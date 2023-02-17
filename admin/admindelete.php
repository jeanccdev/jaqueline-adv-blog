<?php
	include('connect.php');
	$id = $_POST['id'];
	$titulo = $_POST['titulo'];
	$sql = "SELECT id, fileimagem, paglink FROM posts WHERE id = '$id'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
  				// output data of each row
  				while($row = $result->fetch_assoc()) {
  					$auxpag = $row['paglink'] . ".php'";
    				$pagina = "'posts/" . $auxpag;
    				$auximg = $row['fileimagem'] . "'";
    				$imagem = "'posts/" . $auximg;
    				unlink($pagina);
    				unlink($imagem);
  				}
			} 
			else {
  				echo "Não foi possível deletar pagina e/ou imagem";
			}




	$sql = "DELETE FROM posts WHERE titulo = '" . $titulo . "' OR id = '" . $id . "'";
	$result = $conn->query($sql);
	if (mysqli_query($conn, $sql)) {
		echo "Post <b>" . $titulo . "</b> deletado com sucesso";
	} 
	
	
?>

<br><br><a href="index.php">Voltar</a>