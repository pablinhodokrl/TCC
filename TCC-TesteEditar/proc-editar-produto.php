<?php
session_start();
include_once("conexao.php");

        $NomeProduto = $_POST['NomeProduto'];
        $Validade = $_POST['Validade'];
        $Marca = $_POST['Marca'];
        $PreçoQTD = $_POST['PreçoQTD'];
        $PreçoEGD = $_POST['PreçoEGD'];
        $Fornecedor = $_POST['Fornecedor'];
        $Lote = $_POST['Lote'];

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE cadastroproduto SET NomeProduto='$NomeProduto', Validade='$$Validade', Marca='$Marca', PreçoQTD='$PreçoQTD', PreçoEGD='$PreçoEGD', Fornecedor='$Fornecedor', Lote='$Lote', modified=NOW() WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

/* if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: editar.php?id=$id");
} */