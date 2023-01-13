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
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<link rel="icon" type="imagem/png" href="imagens/logo.png" />
		
	</head>
	<body >
		
		<nav class = "barra"></nav>
		<nav class="navbar navbar-expand-lg bg-white">
			<div class="container-fluid">
				


				
				<a style="padding: 0px 50px">Texto</a>
			</a>
			  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
			  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
			  aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				  <li class="nav-item">
				
				  </li>
				  <a href="index.php" href="index.php" style="padding: 10px 10px; margin-left: 90px;">Voltar</a>
				</ul>
				<form class="d-flex" role="search">
				  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				  <button class="btn btn-outline-success" type="submit">Search</button>
				</form>
			  </div>
			</div>
		  </nav>

          <content>
			<hr style="margin: 0px 0px;">

    <div class="">
      <form action="postagem.php" method="POST">

	  <div class="banner" style="background-color: white;">
			<div class="title">
			 
			  <ul class="navbar-nav">
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
				  style="margin:3% 7%">
					Selecione uma comunidade
				  </a>
				  <ul class="dropdown-menu dropdown-menu-white">
					<li><a class="dropdown-item" href="#"><img src="./imagens/grafico.jpg" width="15px"> Mais votados</a></li>
				  </ul>
				</li>
			  </ul>
			</div>
		  </div>
		</div>
          
		
	</form>
	<form action="novopost.php" method="POST" enctype="multipart/form-data">
	  
		<input type="text"  name="titulo" placeholder="Adicione um título interessante" style="width: 100%;">
	  
		  <textarea type="text" name="descricao" placeholder="Adicione o seu texto..." style="width: 100%; padding: 30px;"></textarea>
		 <p>
		 <input name ="imagem" type="file">
		  <center>
			<button type="submit" class="postar" style="background-color: rgb(1, 147, 245); color: white; width: 20%; border-radius: 5px; min-width: 120px;">Postar</button>
		</center>

			
	</form>
	
    </div>
  </content>