<?php
    ob_start();
    if(!isset($_SESSION)){
		session_start();
	}
    $idUser = $_SESSION['nome'];
    $seleciona = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE nome = '$idUser'");
    $linha = mysqli_fetch_assoc($seleciona);
?>
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