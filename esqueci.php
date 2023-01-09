<?php 
	include("conexao.php");

	$erro = array(); // declarada a variavel erro como um array vazio;
	
	if (isset($_POST['ok'])) { //colocado o ok entre aspas

		$email = $mysqli->escape_string($_POST['email']);

		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$erro[] = "E-mail inválido."; //variavel erro
		}

		$sql_code = "SELECT senha FROM usuarios WHERE email = '$email'";
		$sql_query = $mysqli ->query($sql_code) or die ($mysqli->error);
		$dado = $sql_query->fetch_assoc();
		$total = $sql_query->num_rows;

		if ($total == 0)
			$erro[] = "O e-mail não existe no banco de dados."; // inserido o ponto e vírgula, variavel erro

		if (count($erro) == 0 && $total > 0) { //veriavel erro

			$novasenha = substr(md5(time()), 0, 6);
			$nscriptografada = md5(md5($novasenha));
		
			// Na função mail, é necessário verificar se existe um servidor de email
			// funcionando no servidor que você está utilizando
			if (mail($email, "Sua nova senha", "Sua nova senha: ".$novasenha)) {
				$sql_code = "UPDATE usuarios SET senha = '$nscriptografada' WHERE email= '$email'";
				$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
			}
		}
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
	
	<body background="white">
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
							<center> <!-- Tentar não usar a construção center. Fazer isso via CSS -->
								<a class="nav-link active" aria-current="page" href="paglogin.php" style="color:White; padding: 10px 10px;">Entrar/Cadastrar-se</a>
							</center>
						</li>
						<li>
							<a href="logout.php" style="padding: 10px 10px">Sair</a>
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
		<h1 id="t1" style="padding: 10px; margin-left: 4%;">Redefina sua senha</h1>
		<br>
		<p style="color:rgb(109, 109, 109)" id="t2">
			Diga-nos seu endereço de e-mail e enviaremos um e-mail com um link para redefinir sua senha.
		</p>
		<br>
	
		<?php 

		if(count($erro) > 0) { //variavel erro
			foreach($erro as $msg) { //variavel erro
				echo "<p> " . $msg . "</p>"; // ajuste na concatenação de caracteres
			}
		}

		?>
			
		<fieldset>
			<center>
				<form method ="POST" action="">
					<p>
						<center>
							<input type="text" name="email" placeholder="E-mail" class="lblnormal">
						</center>
					</p>
					<br>
					<p>
						<center>
							<button type="submit" class="btn-cadastrar" id="botao" name="ok" value="ok">Redefinir Senha</button>
						</center>
					</p>
				</form>
			</center>
		</fieldset>
		<script type="text/javascript" src="js/alertabotao.js"></script>
	</body>
</html>