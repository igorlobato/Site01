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
		
		
		<nav class="navbar navbar-expand-lg bg-white">
			<div class="container-fluid">
			<a id="rgb" href="index.php" style=color:orange>
				<span style="color:red">R</span>
				<span style="color:green">G</span>
				<span style="color:blue">B</span>				
			</a>	
				<a style="padding: 0px 20px">Postar</a>
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
				  <a href="index.php" href="index.php" style="padding: 10px 10px; margin-left: 20px; text-decoration: none;">Voltar</a>
				</ul>
				<form class="d-flex" role="search">
				  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				  <button class="btn btn-outline-success" type="submit">Pesquisar</button>
				</form>
			  </div>
			</div>
		  </nav>

          
			<hr style="margin: 0px 0px;">

        
		
	
<form action="novopost.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="topic" id="topic">
 	 <ul class="navbar-nav">
    	<li class="nav-item dropdown">
      	<a id="topic-link" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin:3% 7%">
        	Selecione um tópico
      	</a>
      <ul class="dropdown-menu dropdown-menu-white">
        <li><a class="dropdown-item" href="#" value="Intel">Intel</a></li>
        <li><a class="dropdown-item" href="#" value="Amd">Amd</a></li>
        <li><a class="dropdown-item" href="#" value="Geforce">Geforce</a></li>
        <li><a class="dropdown-item" href="#" value="Radeon">Radeon</a></li>
        <li><a class="dropdown-item" href="#" value="Hardware">Hardware</a></li>
        <li><a class="dropdown-item" href="#" value="Software">Software</a></li>
        <li><a class="dropdown-item" href="#" value="Outros">Outros</a></li>
		<ul class="dropdown-menu dropdown-menu-white" onchange="document.getElementById('topic').value = this.value">
	  </ul>
    </li>
  </ul>

  
  
  <input type="text"  name="titulo" placeholder="                        Adicione um título interessante" style="width: 100%;">
  
  <textarea type="text" id="descricao" name="descricao" placeholder="Adicione o seu texto..." style="width: 100%; padding: 30px; overflow-y: hidden;"></textarea>
  <p>
  <input name ="imagem" type="file" style="margin-left: 110px;">
  <center>
    <button type="submit" class="postar" style="background-color: rgb(1, 147, 245); color: white; width: 20%; border-radius: 5px; min-width: 120px; margin-bottom: 140px;">Postar</button>
  </center>
</form>

<script>
	const dropdown = document.querySelector('.dropdown-menu');
	const topicLink = document.getElementById('topic-link');
	const topicInput = document.getElementById('topic');

	dropdown.addEventListener('click', (event) => {
		if (event.target.getAttribute('value')) {
		const selectedTopic = event.target.getAttribute('value');
		topicInput.value = selectedTopic;
		topicLink.textContent = selectedTopic;
		}
	});
</script>

<script>
  const textarea = document.getElementById('descricao');

  textarea.addEventListener('input', () => {
    textarea.style.height = 'auto'; 
    textarea.style.height = textarea.scrollHeight + 'px'; 
  });
</script>


    	
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
		
		<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="sidebars.js"></script>
	  <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      <script src="sidebars.js"></script>

	

</html>
