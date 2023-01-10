<div class="well well-sm">
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
                $sql = "SELECT * FROM usuarios WHERE nome = '$postador'";
                $query = mysqli_query($mysqli, $sql);
                $linha = mysqli_fetch_assoc($query);
            
        ?>
            <div id="panel" aling="left">
                <p><a href="" class="titulo"><?php echo $titulo;?></a></p>
                <?php if($descricao != null){ ?><p class="descricao"><?php echo $descricao;?></p>
                    <?php } ?>
                <?php if($imagem != null){ ?><p><img src="<?php echo $imagem;?>" class="foto"/></p><?php } ?>
                <p><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Postado em: <?php echo $data. "às".$hora;?></br>
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Postado por: <?php echo $linha['nome']; ?></p>
                    <p></p>
            </div>
        
    <?php
            } 
        }
    // }}?>
</div>