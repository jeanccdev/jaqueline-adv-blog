<?php include('basic.php'); include('connect.php') ?>

<html>
<body>
	<!-- Apresentação -->
	<div id="content">
		<img src="imagens/foto.png">
		<br><b>Jaqueline Juliana Gonçalves Cristóvão</b><br>
		OAB/SC 66.761<br>
		jaquecristovao.adv@gmail.com<br><br>
		Agende seu atendimento presencial ou por video confer&ecirc;ncia no link abaixo<br><br><br>
		<a href="https://wa.me/5548999979969?text=Ol%C3%A1%20Dra.%20Jaqueline!%20Preciso%20de%20aux%C3%ADlio%20jur%C3%ADdico.%20Poderia%20me%20ajudar?" target="_blank">Entre em contato</a>
	</div>
	<br><br>
	
	<!-- Serviços que são realizados -->
	<div id="works">
		<center><b>Serviços</b></center><br>
		<table align="center">
			<tr>
				<td>
					<a href="servicos.php?servico=aposentadoria">Aposentadoria</a><br>
					
				</td>
				<td>
					<a href="servicos.php?servico=beneficioassistencial">Benefício Assistencial
				</td>
				<td>
					<a href="servicos.php?servico=beneficioprevidenciario">Benefício Previdenciário
				</td>
			</tr>
			<tr>
				<td>
					<a href="servicos.php?servico=pensaopormorte">Pensão por Morte
				</td>
				<td>
					<a href="servicos.php?servico=beneficiocancelado">Benefícios Cancelados, Negados ou Suspensos
				</td>
				<td>
					<a href="servicos.php?servico=revisaodebeneficio">Revisão de Benefício
				</td>
			</tr>
		</table>
	</div>
	<br><br>
	
	<!-- Ultimos Posts -->
	<div id="post">
	<center><b>Últimos Posts</b></center><br><br>
		<table align="center">
			<tr>
				<?php
					$sql = "SELECT id, link, imagem, titulo, texto, paglink, fileimagem, hoje FROM posts ORDER BY id DESC LIMIT 2";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
  						// output data of each row
  						while($row = $result->fetch_assoc()) {
    						echo "<td><a href='posts/" . $row['paglink'] . ".php'><b>" . $row['titulo'] . "</b></a>";
  						}
					} 
					else {
  						echo "0 results";
					}
				?>
			</tr>
			<tr>
				<?php
					$sql = "SELECT id, link, imagem, titulo, texto, paglink, fileimagem, hoje FROM posts ORDER BY id DESC LIMIT 2";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
  						// output data of each row
  						while($row = $result->fetch_assoc()) {
    						echo "<td>" . $row['link'] . $row['imagem'] . "</a>";
  						}
					} 
					else {
  						echo "0 results";
					}
				?>
			</tr>
			<tr>
				<?php
					$sql = "SELECT id, link, imagem, titulo, texto, paglink, fileimagem, hoje FROM posts ORDER BY id DESC LIMIT 2";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
  						// output data of each row
  						while($row = $result->fetch_assoc()) {
    						echo "<td><a href='posts/" . $row['paglink'] . ".php'>Quer saber mais?</a>";
  						}
					} 
					else {
  						echo "0 results";
					}
				?>
			</tr>
			<tr>
				<?php
					$sql = "SELECT id, link, imagem, titulo, texto, paglink, fileimagem, hoje FROM posts ORDER BY id DESC LIMIT 2";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
  						// output data of each row
  						while($row = $result->fetch_assoc()) {
    						echo "<td style='font-size: 15px; color: #888;'>Atualizado em " . $row['hoje'] . "</td>";
  						}
					} 
					else {
  						echo "0 results";
					}
				?>
			</tr>
		</table>
	</div>
	
	<br>
	
	<!-- Rodapé -->
	<div id="footer">
		<b>© Todos os direitos reservados - Jaqueline Juliana Gonçalves Cristóvão - Advogada em Florianópolis /SC</b>
	</div>
</body>
</html>