<?php
	include('connect.php');
	date_default_timezone_set('America/Sao_Paulo');
	$titulo = $_POST['titulo'];
	$texto = $_POST['texto'];
	$texto = nl2br($texto);
	$imagem = $_FILES['pic']['name'];
	$auximg = "<img src=/posts/" . $imagem . ">";
	$link = $_POST['link'];
	$auxlink = "<a href=/posts/"  . $link . ".php>";
	$hoje = date("d/m/y");
	$sql = "INSERT INTO posts (titulo, texto, imagem, link, hoje, paglink, fileimagem) VALUES ('$titulo', '$texto', '$auximg', '$auxlink', '$hoje', '$link', '$imagem')";
	if (mysqli_query($conn, $sql)) {
		echo "Post realizado com sucesso!<br>";
	} 


	$mod1 = file_get_contents('modelo.txt');
	$mod2 = file_get_contents('modelo2.txt');
	$txt = $mod1 . $paglink . $mod2;
	$myfile = file_put_contents("../posts/" . $link . ".php", $txt) or die("<br>Não foi possível abrir ou criar o arquivo!<br>");

if(isset($_FILES['pic']))
 {
    $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
    $new_name = $_FILES['pic']['name']; //Definindo um novo nome para o arquivo
    $dir = '../posts/'; //Diretório para uploads 
    move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    echo("Imagen enviada com sucesso!<br>");
 } 

?>

<br><br><a href="index.php">Voltar</a>