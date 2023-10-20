<?php
    ob_start();
    if(!isset($_SESSION)){
		session_start();
	}
    $idUser = $_SESSION['nome'];
    $id = $_SESSION['id'];
    $seleciona = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE nome = '$idUser'");
    $linha = mysqli_fetch_assoc($seleciona);


	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['imagem'])) {
        // Verifique se o arquivo é uma imagem
        if (getimagesize($_FILES['imagem']['tmp_name'])) {
            // Diretório para salvar as imagens de perfil
            $uploadDir = 'imagens/fotosdeperfil/';
    
            // Nome do arquivo com base no ID do usuário (você pode melhorar a geração do nome)
            $uploadFile = $uploadDir . $idUser . '.jpg';
    
            if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadFile)) {
                // Atualize o nome da imagem de perfil no banco de dados
                $updateQuery = "UPDATE usuarios SET foto = '$uploadFile' WHERE id = $id";
                if (mysqli_query($mysqli, $updateQuery)) {
                    echo "Foto de perfil alterada com sucesso.";
                } else {
                    echo "Erro ao atualizar o banco de dados.";
                }
            } else {
                echo "Não foi possível alterar a foto de perfil, tente novamente.";
            }
        } else {
            echo "O arquivo enviado não é uma imagem válida.";
        }
    }

?>
<div class="perfil">
    <h3 style="text-align: center;">Perfil</h3>
    <hr/>
    <center>
    <?php
    if (isset($_SESSION['id'])) {
        // Recupere a URL da foto de perfil do usuário do banco de dados
        $idUser = $_SESSION['id'];
        $seleciona = mysqli_query($mysqli, "SELECT foto FROM usuarios WHERE id = '$idUser'");
        $linha = mysqli_fetch_assoc($seleciona);

        // Verifique se a foto de perfil existe
        $fotoPerfil = $linha['foto'];

        if (is_null($fotoPerfil)) {
            $fotoPerfil = 'imagens/fotosdeperfil/foto_perfil0.jpg'; // Use a imagem padrão
        }

        // Exiba a foto de perfil em uma tag <img> e defina um tamanho adequado
        echo '<img src="' . $fotoPerfil . '" alt="Foto de Perfil" style="width: 150px; height: 150px; border-radius: 50%; margin: 0 auto;">';
    }
    ?>
    </center>
    <form action="" method="POST" enctype="multipart/form-data" class="formulario">
        <input name ="imagem" type="file" style="margin-left: 110px;">
        <p><br><input type="submit" value="Alterar foto" class="btn-perfil" /></p>
        <input type="hidden" name="alterar" value="change">
        
    </form>

    <p style="font-size: 20px; font-weight: bold; text-align: left; margin-left: 15px"><?php echo 'Id: ', $_SESSION['id'];?></p>
    <p style="font-size: 20px; font-weight: bold; text-align: left; margin-left: 15px"><?php echo 'Nome de usuário: ', $_SESSION['nome'];?></p>
    <p style="font-size: 20px; font-weight: bold; text-align: left; margin-left: 15px"><?php echo 'E-mail: ', $_SESSION['email'];?></p>
    <p style="font-size: 20px; font-weight: bold; text-align: left; margin-left: 15px">
    <?php echo 'Adm: ';
     if (isset($_SESSION['adm']) && $_SESSION['adm'] != 0) {
		echo ' <span style="color: #ADFF2F">Sim</span>';}
    else{
        echo ' <span style="color: red">Não</span>';
    }
    ?></p>

        <?php
            if(isset($_POST['alterarfoto']) && $_POST['alterarfoto'] == "change"){
                $nome = $_POST['nome'];
                $senha = $_POST['senha'];           
                if(empty($nome) || empty($senha)){
                    echo "Preencha todos os campos";
                }else{
                    $alterar = "UPDATE usuarios SET nome = '$nome', senha = '$senha'
                    WHERE nome = '$idUser'";
                    if(mysqli_query($mysqli, $alterar)){
                        echo "Dados alterados com sucesso";
                        $_SESSION['nome'] = $nome;
                    }else{
                        echo "Erro ao alterar dados!";
                    }
                }
            }
        ?>
<br>
</div>
<br>

<div class="perfil">
    <h3 style="text-align: center;">Editar perfil</h3>
    <hr/>
    <form action="" method="POST" enctype="multipart/form-data" class="formulario">
        <p><input type="text" name="nome" id="nome" value="<?php echo $_SESSION['nome'];?>" placeholder="Nome de usuário"
        class="form form-control" /></p>
        <p><input type="password" name="senha" id="senha" value="<?php echo $linha['senha'];?>" placeholder="********"
        class="form form-control" /></p>
        <p><input type="submit" value="Alterar dados" class="btn-perfil" /></p>
        <input type="hidden" name="alterar" value="change">
    </form>

    <?php
        if(isset($_POST['alterar']) && $_POST['alterar'] == "change"){
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];           
            if(empty($nome) || empty($senha)){
                echo "Preencha todos os campos";
            }else{
                $alterar = "UPDATE usuarios SET nome = '$nome', senha = '$senha'
                 WHERE nome = '$idUser'";
                 if(mysqli_query($mysqli, $alterar)){
                    echo "Dados alterados com sucesso";
                    $_SESSION['nome'] = $nome;
                 }else{
                    echo "Erro ao alterar dados!";
                 }
            }
        }
    ?>
</div>
<div class="perfil">
    <h3 style="text-align: center;">Apagar conta</h3>
    <hr/>
    <form action="" method="POST" enctype="multipart/form-data" class="formulario" align="left">
        <p align="left"><input type="submit" value="Apagar" class="btn-perfil"/></p>
        <input type="hidden" name="deletar" value="delete">
    </form>
<?php
        $usuario = $_SESSION['nome'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST['deletar']) && $_POST['deletar'] == "delete"){
                $delete = "DELETE FROM usuarios WHERE nome = '$usuario'";           
                if(mysqli_query($mysqli, $delete)){
                    mysqli_close($mysqli);
                    ob_end_clean();
                    header('Location: ../index.php');
                    exit();
                }else{
                    echo "Erro ao deletar o usuário"; 
                }
            }
        }             
?>
</div>