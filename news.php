<?php include('basic.php'); include('admin/connect.php') ?>

<html>
<head>
	<style>
		#menor {
			display: inline;
			background-color: #04AA6D;
			border: none;
			color: white;
			padding: 10px;
			text-decoration: none;
			margin: 4px 2px;
			cursor: pointer;
			font-weight: bold;
		}
	</style>
	<script>
		function aumentar() {
			a.style.display = "none";
		}
		
	</script>
</head>
<body>
		<?php
			$sql = "SELECT id, link, imagem, titulo, texto, hoje FROM posts ORDER BY id DESC limit 1";
			$result = $conn->query($sql);
			$a = 0;
			$b = 1;

			if ($result->num_rows > 0) {
  				// output data of each row
  				while($row = $result->fetch_assoc()) {
  					$id[$a] = $row['id'];
  					$link[$a] = $row['link'];
  					$imagem[$a] = $row['imagem'];
  					$titulo[$a] = $row['titulo'];
  					$texto[$a] = $row['texto'];
  					$hoje[$a] = $row['hoje'];
  					$menor = substr($texto[$a], 0, 300);

  					print_r("<div id='first'>" . $link[$a] . $imagem[$a] . "<br><b>" . $titulo[$a] . "</b><p align='justify'>" . $menor . "...</p><button id='menor'>Continue lendo</button></a><p style='font-size: 15px; color: #888;'>Atualizado em " . $hoje[$a] . "</font></div><br><br");
  				}
			} 
			else {
  				echo "0 results";
			}
		?>
	</div>
	<br>
		<?php
			$sql = "SELECT id, link, imagem, titulo, texto, hoje FROM posts ORDER BY id DESC limit 1, 500";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
  				// output data of each row
  				while($row = $result->fetch_assoc()) {
  					$id[$a] = $row['id'];
  					$link[$a] = $row['link'];
  					$imagem[$a] = $row['imagem'];
  					$titulo[$a] = $row['titulo'];
  					$texto[$a] = $row['texto'];
  					$hoje[$a] = $row['hoje'];
  					$menor = substr($texto[$a], 0, 300);

  					print_r("<div id='posts'>" . $link[$a] . $imagem[$a] . "<br><b>" . $titulo[$a] . "</b><p align='justify'>" . $menor . "...</p><button id='menor'>Continue lendo</button></a><p style='font-size: 15px; color: #888;'>Atualizado em " . $hoje[$a] . "</font></div><br><br");
  				}
			} 
			else {
  				echo "0 results";
			}
			$conn->close();
		?>
	<div id="footer">
		<b>© Todos os direitos reservados - Jaqueline Juliana Gonçalves Cristóvão - Advogada em Florianópolis /SC</b>
	</div>

</body>
</html>