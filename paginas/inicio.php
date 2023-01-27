<div class="well well-sm">
<div class="banner barra-topo">
			  <h1 style="margin: 0% 5%; margin-down: 5%;"><br>Geral</h1>
		  </div>
    <?php
        include_once 'conexao.php';
        $seleciona = mysqli_query($mysqli, 'SELECT * FROM posts ORDER BY id DESC');
        $conta = mysqli_num_rows($seleciona);

        if($conta <= 0){
            echo "<code>Nehuma postagem cadastrada no banco de dados!";
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
                <p><a href="?pagina=posts&id=<?php echo $id;?>" class="titulo"><?php echo $topico;?></a></p>
                <p><a href="?pagina=posts&id=<?php echo $id;?>" class="titulo"><?php echo $titulo;?></a></p>
                <?php if($descricao != null){ ?><p class="descricao"><?php echo $descricao;?></p>
                    <?php } ?>
                <?php if($imagem != null){ ?><p><img src="<?php echo $imagem;?>" class="foto"/></p><?php } ?>
                <p><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Postado em: <?php echo $data. " às ".$hora;?></br>
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Postado por: <?php echo $linha['nome']; ?></p>
                <p><code><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> <?php echo $contaCurtidas;?> - 
                <span class="glyphicon glyphicon-comment" aria-hidden="true"></span><?php echo $contaComentarios;?></code></p>
                <p><a href="?pagina=curtir&id=<?php echo $id;?>" class="btn btn-default">
                <span class="glyphicon glyphicon-thumbs-up"></span> Curtir</a>
                <a href="?pagina=posts&id=<?php echo $id;?>" class="btn btn-default">
                <span class="glyphicon glyphicon-comment"></span> Comentar</a>
                </p>
            </div>
        
    <?php
            } 
        }
    // }}?>
</div>