<?php
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
					<?php
					
					?>
					<a class="nav-link active" aria-current="page" href="paglogin.php" style="color:White; padding: 10px 10px;">Entrar/Cadastrar-se</a>
					<?php 
					
					
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

		  <div class="banner" style="background-color: white;">
			<div class="title">
			  <h1 style="margin: 0% 5%;"><br>Popular</h1>
			  <ul class="navbar-nav">
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
				  style="margin:3% 7%"><img src="./imagens/fogo.jpg" width="15px">
					Em destaque
				  </a>
				  <ul class="dropdown-menu dropdown-menu-white">
					<li><a class="dropdown-item" href="#"><img src="./imagens/grafico.jpg" width="15px"> Mais votados</a></li>
					<li><a class="dropdown-item" href="#"><img src="./imagens/x.jpg" width="15px"> Mais recentes</a></li>
				  </ul>
				</li>
			  </ul>
			</div>
		  </div>
		
		  
		  <div class="row">
			<div>
	  
			  <div class="post-content">
				<h4>Título da publicação</h4>
				<span class="text-muted small"><i class="fas fa-user"></i> Eu - <i class="far fa-clock"></i> 00/00/00 às 00:00</span>
				<div class="media">
				  <img class="mr-3" src="imagens/i1.jpg">
				  <div class="media-body">
					Título da publicação Título da publicação Título da publicação Título da publicação Título da publicação Título da publicação Título da publicação  Título da publicação Título da publicação 
					<p class="button"><a href="#" class="btn btn-info btn-sm">Ler Mais</a></p>
				  </div>
				</div>
			  </div>
		
			
	  
	  
		  </div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

	</body>
</html>