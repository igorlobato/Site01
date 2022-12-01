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
		<nav class="navbar navbar-expand-lg bg-white">
			<div class="container-fluid">
				<a style="padding: 0px 50px">Texto</a>
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

          <content>

    <div class="">
      <form action="novopost.php" method="POST">

        <div class="field">
          <div class="field-label">
            Selecione uma comunidade
          </div>
          <div class="field-data">
            <input type="text" id="descricao" name="descricao" placeholder="Digite a descrição" size="40">
          </div>
        </div>
      
        <div class="field">
          <div class="field-label">
            Adicione um Texto...
          </div>
          <div class="field-data">
            <textarea name="observacao">
              </textarea>
            </div>
          </div>
        
         
      </form>
    </div>
  </content>