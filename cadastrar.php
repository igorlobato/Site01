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
    $_SESSION['Esse E-mail já está cadastrado'] = true;
    header('Location: paglogin.php');
    exit;
}

$sql = "INSERT INTO usuarios (email, nome, senha) VALUES ('$email', '$nome', '$senha')";


if($mysqli->query($sql) === TRUE) {
    $_SESSION['postagem'] = true;
}

$mysqli->close();

header('Location: paglogin.php');
exit;

?>