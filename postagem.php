<?php
session_start();
include_once("conexao.php");

$result = mysqli_query($connection, 'SELECT * FROM posts ORDER BY id DESC LIMIT 0,5');

$titulo = mysqli_real_escape_string($mysqli, trim($_POST['titulo']));
$texto = mysqli_real_escape_string($mysqli, trim($_POST['descricao']));

echo "
 .
$titulo .
' - ' .
$texto .

"

header('Location: index.php');
exit;

?>
