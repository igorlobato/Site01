<dic id="content">
    <?php
    include_once("conexao.php");
        $seleciona = mysqli_query("SELECT * FROM usuarios ORDER BY id DESC");
        $conta = mysqli_num_rows($seleciona);

        if($conta<= 0){
            echo "Nenhum usuário cadastrado no até o momento!";
        }else{
            while($row = mysqli_fetch_array($seleciona)){
                $nome = $row['nome'];
                $usuarios = $rpw['usuario'];
                
            }
        }

    ?>
    