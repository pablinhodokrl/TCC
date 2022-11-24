<?php
include_once("config.php");

        $id = $_POST['idProduto'];
        $NomeProduto = $_POST['NomeProduto'];
        $Validade = $_POST['Validade'];
        $Marca = $_POST['Marca'];
        $PreçoQTD = $_POST['PreçoQTD'];
        $PreçoEGD = $_POST['PreçoEGD'];
        $Fornecedor = $_POST['Fornecedor'];
        $Lote = $_POST['Lote'];
        
        $result_usuario = "UPDATE cadastroproduto SET NomeProduto='$NomeProduto', Validade='$Validade', Marca='$Marca', PreçoQTD='$PreçoQTD', PreçoEGD='$PreçoEGD', Fornecedor='$Fornecedor', Lote='$Lote' WHERE id='$id'";
        $resultado_usuario = mysqli_query($conexao, $result_usuario);
        
        header('Location: busca-de-produtos.php')

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";


/* if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: editar.php?id=$id");
} */

?>