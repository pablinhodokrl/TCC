<?php
include_once("config.php");

        $id = $_POST['idProduto'];
        
        $result_usuario = "DELETE FROM cadastroproduto WHERE id='$id'";
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