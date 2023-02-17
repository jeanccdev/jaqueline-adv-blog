<?php include('admin/connect.php') ?>
		<?php
			$sql = "SELECT id, link, imagem, titulo, texto, hoje FROM posts ORDER BY id DESC limit 1, 500";
			$result = $conn->query($sql);
			$i = 0;

			if ($result->num_rows > 0) {
  				// output data of each row
  				while($row = $result->fetch_assoc()) {
  					$menor = substr($row['texto'], 0, 300);
  					$maior = substr($row['texto'], 0);
  					
  					$link[$i] = $row['link'];
  					print_r($link[$i] . "haha</a><br>");
  					$i++;
  				}
			} 
			else {
  				echo "0 results";
			}
		?>