<!--  Cada post virar uma "página" -->
<div class="well well-sm">
    
<?php
include_once 'conexao.php';
 $idPost = $_GET['id'];

 $seleciona = mysqli_query($mysqli, "SELECT * FROM posts WHERE id = '$idPost'");
 $conta = mysqli_num_rows($seleciona);

 if($conta <= 0){
    echo"Post não encontrado";
 }else{
    while($row = mysqli_fetch_array($seleciona)){
        $id = $row['id'];
        $titulo = $row['titulo'];
        $descricao = $row['descricao'];
        $imagem = $row['imagem'];
        $data = $row['data'];
        $hora = $row['hora'];
        $postador = $row['postador'];
        $topico = $row['topico'];
        $sql = "SELECT * FROM usuarios WHERE nome = '$postador'";
        $query = mysqli_query($mysqli, $sql);
        $linha = mysqli_fetch_assoc($query);

        $selecionaCurtidas = mysqli_query($mysqli, "SELECT * FROM curtidas WHERE id_post = '$id'");
                $contaCurtidas = mysqli_num_rows($selecionaCurtidas);

                if($contaCurtidas == 1){
                    $contaCurtidas = $contaCurtidas." curtiu";
                }else if($contaCurtidas > 1){
                    $contaCurtidas = $contaCurtidas." curtiram";
                }
                
                $selecionaComentarios = mysqli_query($mysqli, "SELECT * FROM comentarios WHERE id_post = '$id'");
                $contaComentarios = mysqli_num_rows($selecionaComentarios);

                if($contaComentarios == 1){
                    $contaComentarios = $contaComentarios." comentou";
                }else if($contaComentarios > 1){
                    $contaComentarios = $contaComentarios." comentaram";
                }
?>
    
    <div id="panel" aling="left">
                <p><a href="?pagina=posts&id=<?php echo $id;?>" class="topico"><?php echo $topico;?></a></p>
                <p><a href="?pagina=posts&id=<?php echo $id;?>" class="titulo"><?php echo $titulo;?></a></p>
                <?php if($descricao != null){ ?><p class="descricao"><?php echo $descricao;?></p>
                    <?php } ?>
                <?php if($imagem != null){ ?><p><img src="<?php echo $imagem;?>" class="foto"/></p><?php } ?>
                <p><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Postado em: <?php echo $data. "às".$hora;?></br>
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Postado por: <?php echo $linha['nome']; ?></p>
                <p><code><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> <?php echo $contaCurtidas;?> - 
                <span class="glyphicon glyphicon-comment" aria-hidden="true"></span><?php echo $contaComentarios;?></code></p>
                <p><a href="?pagina=curtir&id=<?php echo $id;?>" class="btn btn-default">
                <span class="glyphicon glyphicon-thumbs-up"></span> Curtir</a>
                <a href="?pagina=post&id=<?php echo $id;?>" class="btn btn-default">
                <span class="glyphicon glyphicon-comment"></span> Comentar</a>
                </p>
            </div>
<?php }}?>
                </div>

<div id="panel" align="left">
    <h3>Diga algo sobre esta publicação</h3>
    <hr/>
    <form action="" method="POST" enctype="multipart/form-data">
        <p><textarea name="comentario" id="comentario" placeholder="Digite seu comentário" class="form form-control">
        </textarea></p>
        <p align="right"><input type="submit" value="Enviar comentário" class="btn btn-sucess"></p>
        <input type="hidden" name="comentar" value="comment">
    </form>
    <?php
        if ( (isset($_POST['comentar']) && $_POST['comentar'] == "comment") && (isset($_SESSION['nome'])) ){
            $nome = $_SESSION['nome'];
            $comentario = $_POST['comentario'];

            date_default_timezone_set('America/Sao_paulo');
            $data = date("d/m/Y");
            $hora = date("H:i:s");

            if(empty($nome)){
                echo 'É preciso estar logado para comentar!';
            }else{
                $comentar = "INSERT INTO comentarios (id_post, nome, comentario, data, hora) VALUES
                ('$idPost', '$nome', '$comentario', '$data', '$hora')";

                if(mysqli_query($mysqli, $comentar)){
                    echo "Comentário enviado com sucesso!";
                }
            }
        }
    ?>

    <hr>
    <?php
        $seleciona = mysqli_query($mysqli, "SELECT * FROM comentarios WHERE id_post = '$idPost' ORDER BY id DESC");
        $conta = mysqli_num_rows($seleciona);

        if($conta <= 0) {
            echo "Este post não possui comentários";
        } else {
            while
                ($row = mysqli_fetch_array($seleciona)) {
                    $nome = $row['nome'];
                    $comentario = $row['comentario'];
                    $data = $row['data'];
                    $hora = $row['hora'];               
    ?>

        <div id="comentarios" class="well well-sm">
            <p><b><?php echo $nome;?></br></p>
            <p class="list-group-item"><?php echo $comentario;?></p>
            <p class="list-group-item"><span class="glyphicon-search" aria-hidden="true"></span>
            <?php echo $data. " às " . $hora;?></p>         
        </div>

    <?php }
    } ?> 
</div>