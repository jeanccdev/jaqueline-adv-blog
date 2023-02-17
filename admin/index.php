<?php

	include('connect.php');
	include('basic.php');

?>

<html>
<head>
	<title>Painel</title>
	<style>
		
	</style>
</head>
<body>

	<form method="post" action="/admin/adminpost.php" id="first" enctype="multipart/form-data">
		<b>Adicionar post</b><br>
    	<p>Imagem: <input type="file" name="pic" accept="image/*"></p>
		<p>Link: <input type="text" name="link"></p>
		<p>Titulo: <input type="text" name="titulo"></p>
		<p>Texto: <textarea name="texto"></textarea></p>
		<p><input type="submit" value="Enviar"></p>
	</form>
	<br><br>
	<form method="post" action="/admin/adminupdate.php" id="posts">
		<b>Alterar post</b>
		<p>ID: <input type="text" name="id"></p>
		<p>Titulo: <input type="text" name="titulo"></p>
		<p>Texto: <textarea name="texto"></textarea></p>
		<p><input type="submit" value="Enviar"></p>
	</form>
	<br><br>
	<form method="post" action="/admin/admindelete.php" id="posts">
		<b>Deletar post</b>
		<p>ID: <input type="text" name="id"></p>
		<p>Titulo: <input type="text" name="titulo"></p>
		<p><input type="submit" value="Enviar"></p>
	</form>
	<br><br>
		<?php
			$sql = "SELECT id, link, imagem, titulo, texto, hoje FROM posts ORDER BY id DESC";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
  				// output data of each row
  				while($row = $result->fetch_assoc()) {
    				echo "<div id='posts'>ID: " . $row['id'] . $row["link"] . $row["imagem"] . "<br><b>" . $row["titulo"] . "</b><p align='justify'>" . $row["texto"] . "</p></a></div><br><br>";
  				}
			} 
			else {
  				echo "0 results";
			}
			$conn->close();
		?>
	
</body>
</html>