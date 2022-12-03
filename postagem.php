



<?php
session_start();
include("conexao.php");

$titulo = mysqli_real_escape_string($mysqli, trim($_POST['titulo']));
$texto = mysqli_real_escape_string($mysqli, trim($_POST['descricao']));


$sql = "INSERT INTO post (titulo, texto) VALUES ('$titulo', '$texto')";



if($mysqli->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$mysqli->close();

header('Location: index.php');
exit;

?>