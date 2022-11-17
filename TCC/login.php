<?php
include('config.php');

if(empty($_POST['email'])  && empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_scape_string($conexao, $_POST('usuario'));
$senha = mysqli_real_scape_string($conexao, $_POST('senha'));

$querry = "";
?>