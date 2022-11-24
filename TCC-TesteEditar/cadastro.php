<?php

    if(isset($_POST['submit']))
    {
        
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $empresa = $_POST['empresa'];
        $cpfcnpj = $_POST['cpfcnpj'];
        
        
        $sql = mysqli_query($conexao, "INSERT INTO cadastro(nome,email,empresa,cpfcnpj,senha) 
        VALUES ('$nome','$email','$empresa','$cpfcnpj','$senha')");

    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>

    <link href='https://fonts.googleapis.com/css?family=Kiwi Maru' rel='stylesheet'>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
    
    <div class="box">

        <div class="cadastro-guias">
            
            <h1>Cadastre-se</h1>
            
            <form action="cadastro.php" method="POST">
                
                <input type="text" id="nome_completo" placeholder ="Nome Completo" name="nome"> <br>
                <input type="text" id="nome_empresa" placeholder ="Nome da Empresa" name="empresa"> <br>
                <input type="text" id="email" placeholder ="Email" name="email"> <br>
                <input type="number" id="cpf" placeholder ="CPF" name="cpfcnpj"> <br>
                <input type="password" id="senha" placeholder ="Senha" name="senha"> <br>
                
                <div class="botão">

                    <input type="submit" value="Entrar" name="submit">
                </div>
                
            </form>
            
        </div>

    </div>
    </body>
</html>