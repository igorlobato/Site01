<?php
session_start();
include("conexao.php");

$email = mysqli_real_escape_string($mysqli, trim($_POST['emailc']));
$nome = mysqli_real_escape_string($mysqli, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($mysqli, trim($_POST['senhac']));


$sql = "select count(*) as total from usuarios where email = '$email'";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['mensagem'] = "Esse E-mail já está cadastrado";
    header('Location: paglogin.php');
    exit;
}

$sql = "INSERT INTO usuarios (email, nome, senha, adm) VALUES ('$email', '$nome', '$senha', '0')";

if($mysqli->query($sql) === TRUE) {
    $_SESSION['mensagem'] = "Usuário cadastrado com sucesso";
} else {
    $_SESSION['mensagem'] = "Falha ao cadastrar usuário";
}

$mysqli->close();

header('Location: paglogin.php');
exit;
?>
