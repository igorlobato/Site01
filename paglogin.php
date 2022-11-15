<?php 
include('conexao.php');
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
	

	<body background="white">
	
			
		<nav class = "barra"></nav>
		<nav class="navbar navbar-expand-lg bg-dark">
			<div class="container-fluid">
			  <a id="rgb" href="index.html" style=color:orange>RGB</a>
			  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				  <li class="nav-item">
					<center>
					<a class="nav-link active" aria-current="page" href="paglogin.html" style="color:White">Entrar/Cadastrar-se</a>
				</center>
				  </li>
				</ul>
				<form class="d-flex" role="search">
				  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				  <button class="btn btn-outline-success" type="submit">Search</button>
				</form>
			  </div>
			</div>
		  </nav>



		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
		<br>
		
		<h1 style="padding: 10px 30px">Cadastrar-se</h1>
		<br>
		<a style="padding: 50px;color:rgb(109, 109, 109); padding-right: 0%; padding-left: 8%;" >Ao continuar você conconda com a <a href ="#" >política de privacidade</a></a>

		<br>
		<br>
		<br>
		<fieldset>
			<center>
		 
			<input
			 class="lblnormal"
			  placeholder="E-mail"
			  size="40"
			</center
			/>
		  </fieldset>
		  <br>
		  <fieldset>
			<center>
			
			<input
			 class="lblnormal"
			  placeholder="Senha"
			  size="40"
			</center
			/>
		  </fieldset>
		  <br>
		  <br>
		  <center>
		  
		  <input onclick="alert('Cadastro realizado com sucesso')" type="submit" value="Cadastrar" class="btn-cadastrar" />
		</center>

		<br>
		<br>
		<h1 style="padding: 10px 30px">Entrar</h1>
		<br>
		<br>
		<fieldset>
			<center>
			
			<input class="lblnormal"
			  placeholder="E-mail/Nome do usuário"
			  size="40"
			  name = 'e-mail'
			</center
			/>
		  </fieldset>
		  <br>
		  <fieldset>
			<center>
			
			<input
			  class="lblnormal"
			  placeholder="Senha"
			  name = 'senha'
			</center
			/>
			
		  </fieldset>
		  <br>
		<center>
			<input id="entra" type="submit" value="Entrar" class="btn-cadastrar"/>
		  </center>
		  <br>
		<a id="esqc">Esqueceu a <a href ="esqueci.html">senha?</a></a>
	</body>
</html>
