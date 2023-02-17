<?php include('basic.php'); include('connect.php') ?>

<html>
<body>
	<div id="first">

		<?php
			$sql = "SELECT id, link, imagem, titulo, texto, hoje FROM posts WHERE paglink = 'auxilioacidente'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
  					echo $row['imagem'] . "<br><b>" . $row['titulo'] . "</b><p align='justify'>" . $row['texto'] . "</p><br><br><br><p style='font-size: 15px; color: #888;'>Atualizado em " . $row['hoje'] . "</font>";
				}
			} 
			else {
				echo "0 results";
			}
		?>
	</div>
	<br><br>
	
	<div id="footer">
		<b>© Todos os direitos reservados - Jaqueline Juliana Gonçalves Cristóvão - Advogada em Florianópolis /SC</b>
	</div>
</body>
</html>