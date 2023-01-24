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
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
		 rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
		  crossorigin="anonymous">
		<link rel="icon" type="imagem/png" href="imagens/logo.png" />
		<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
		<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

		
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
			
			  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
			  	data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">

				<?php
					if ( (isset($_SESSION['nome'])) && ($_SESSION['nome'] != '') ) {
						echo '<li class="nome-user">' . $_SESSION['nome'] . '</li>'; 
						echo '<li> <a href="logout.php" style="padding: 10px 10px">Sair</a>';
					} else { 
						echo '
						<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="paglogin.php"
						 style="color:White; padding: 10px 10px;">Entrar/Cadastrar-se</a>
						  </li>
						';
					}
				?>
					
				</ul>
				<form action="pesquisa.php" method="POST" enctype="multipart/form-data" class="d-flex" role="search">
				  <input name="busca" class="form-control me-2" type="text" placeholder="Digite algo..." aria-label="Search">
				  <button value="Buscar" class="btn btn-outline-success" type="submit">Pesquisar</button>
				  <input type="hidden" name="buscar" value="find"/>
				</form>
			  </div>
			</div>
		  </nav>
 
		
	
		  
		  <div class="flex-shrink-0 p-3 bg-white menu-lateral">
    <a href="index.php" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
      <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-5 fw-semibold">Conteúdos</span>
    </a>
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
          Processadores
        </button>
        <div class="collapse" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Intel</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Amd</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Outros</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          Placas de Vídeo
        </button>
        <div class="collapse" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Geforce</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Radeon</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Outros</a></li>
            
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
          Geral
        </button>
        <div class="collapse" id="orders-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Hardware</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Software</a></li>
          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
    <?php 
	if( (isset($_SESSION['nome'])) && ($_SESSION['nome'] != '') ) {
	echo'
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          Conta
        </button>
        <div class="collapse" id="account-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
		    <li><a href="?pagina=editarperfil" class="link-dark d-inline-flex text-decoration-none rounded">Perfil</a></li>
            <li><a href="post.php" class="link-dark d-inline-flex text-decoration-none rounded">Novo Post</a></li>
            <li><a href="logout.php" class="link-dark d-inline-flex text-decoration-none rounded">Sair</a></li>
          </ul>
        </div>
      </li>';
    }?>
    </ul>
  </div>



















		  <div class="banner barra-topo">
			  <h1 style="margin: 0% 5%; margin-down: 5%;"><br>Geral</h1>
		  </div>
			
		  </div>
		
		  <div id="body">
		  
				<?php
				if(isset($_POST['buscar']) && $_POST['buscar'] == "find"){
					$busca = $_POST['busca'];
					if(empty($busca)){
						echo "Digite alguma coisa";
					} else{
						$seleciona = mysqli_query($mysqli, "SELECT * FROM posts WHERE titulo LIKE '%busca%' ORDER BY id DESC");
					$conta = mysqli_num_rows($seleciona);
	
					if($conta <= 0){
						echo "<center>Nehum post encontrado!</center>";
                        echo "$busca";
					}else{
                        if(isset($_GET['pagina'])){
                            $do = ($_GET['pagina']);
                        }else{
                            $do = "inicio";
                        }
                        if(file_exists("paginas/" .$do. ".php")){
                            include("paginas/" . $do. ".php");
                        }else{
                            print 'Pagina não encontrada';
                        }
				}
				}
				}
				?>
			
		  </div>






		  <div class="row">
			
		
			
	  
	  
		  </div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
		
		<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="sidebars.js"></script>
	  <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      <script src="sidebars.js"></script>
	</body>
</html>