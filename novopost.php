<?php
	include_once("conexao.php");
	if(!isset($_SESSION)){
		session_start();
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>RedGreenBlue</title>
		<meta charset="UTF-8" />
   		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel = "stylesheet" href = "css/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<link rel="icon" type="imagem/png" href="imagens/logo.png" />
		
	</head>
	<body class="pdf">
		<nav class = "barra"></nav>
		<nav class="navbar navbar-expand-lg bg-dark">
			<div class="container-fluid">
			  <a id="rgb" href="index.php" style=color:orange>
				<span style="color:red">R</span>
				<span style="color:green">G</span>
				<span style="color:blue">B</span>
				
			</a>
			
			  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					
				  <li class="nav-item">
					
					<center>
					
					<a class="nav-link active" aria-current="page" href="paglogin.php" style="color:White; padding: 10px 10px;">Entrar/Cadastrar-se</a>
					<?php 
					
					echo $_SESSION['nome']; 
			
					?>
				</center>
				
				  </li>
				  <a href="logout.php" style="padding: 10px 10px">Sair</a>
				  <a href="post.php" style="padding: 10px 10px">Postar</a>
				</ul>
				<form class="d-flex" role="search">
				  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				  <button class="btn btn-outline-success" type="submit">Search</button>
				</form>
			  </div>
			</div>
		  </nav>
          <content>
    <h1 class="page-title"></h1>

    <?php
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
	$imagem = $_POST['imagem'];
	$postador = $_SESSION['nome'];
	date_default_timezone_set('America/Sao_Paulo');
	$data = date("d/m/Y");
	$hora = date("H:i:s");
	$topico = $_POST['topic'];

	$uploaddir = 'imagens/uploads/';
	$uploadfile = $uploaddir.basename($_FILES['imagem']['name']);
	$imagename = $uploaddir.basename($_FILES['imagem']['name']);

	if(move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile)){
		echo "Imagem enviada com sucesso";}
		else{
			echo "Erro ao enviar a imagem";
		}

    ?>

<h3 style="margin: 30px 30px">
    <?php
    $sql = "INSERT INTO posts (titulo, descricao, imagem, postador, data, hora, topico)
	 VALUES ('$titulo', '$descricao', '$imagename', '$postador', '$data', '$hora', '$topico')";

    // if ($result = mysqli_query($connection, $sql)) {
	
	if ($result = $mysqli->query($sql)) {
			echo "Post feito com sucesso.
        <a href='index.php'>Voltar</a>
      ";
    } else {
        echo "Erro ao postar.
        <a href='index.php'>Voltar</a>
      ";
    }
    ?>
	</h3>

</body>
</html>