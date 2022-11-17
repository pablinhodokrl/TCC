<?php

    if(isset($_POST['submit']))
    {
        
        include_once('config.php');

        $NomeProduto = $_POST['NomeProduto'];
        $Validade = $_POST['Validade'];
        $Marca = $_POST['Marca'];
        $PreçoQTD = $_POST['PreçoQTD'];
        $PreçoEGD = $_POST['PreçoEGD'];
        $Fornecedor = $_POST['Fornecedor'];
        $Lote = $_POST['Lote'];
        
        $sql = mysqli_query($conexao, "INSERT INTO cadastroproduto(NomeProduto,Validade,Marca,PreçoQTD,PreçoEGD,Fornecedor,Lote) 
        VALUES ('$NomeProduto','$Validade','$Marca','$PreçoQTD','$PreçoEGD', '$Fornecedor', '$Lote')");

        

    }

    $msg = false;

        if(isset($_FILES['arquivo'])){

           $extensao =  strtolower(substr($_FILES['arquivo']['name'], -4));
           $novo_nome = md5(time()). $extensao;
           $diretorio = "upload/";

           move_uploaded_file($_FILES['arquivo']['name'], $diretorio.$novo_nome);

           $sql_code = "INSERT INTO arquivo (idCodigo, arquivo, data) VALUES(null, '$novo_nome', NOW())";


        }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href='https://fonts.googleapis.com/css?family=Kiwi Maru' rel='stylesheet'>

    <link rel="stylesheet" href="css/home.css">

    <link rel="icon" type="image/x-icon" href="imgs/logoT.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>

<div class="container-fluid">

<div class="container-fluid">
  
<div class="primeira-row">

    
<a class="logo" href="busca-de-produtos.php"> 
    <p>Capy</p> 
    <img src="imgs/logoT.png" alt="logo-capy" title="Capy Estoque"> 
</a>

</div>





<!-- <a class="anav" href="#">
    <svg xmlns="" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
    </svg></a> -->

<!-- <div class="botão-profile">

    <a href="" class="btn-redondo">P</a>

</div> -->

<!-- <button  onclick="openMenu()">
    <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</button> -->

</div>

<div class="container-fluid">
<!--  <p><a href="analise-de-estoque.html">Análise de Estoque</a></p>
<p><a href="busca-de-produtos.php">Busca de Produtos</a></p>
<p><a href="home.php">Cadastro de Produtos</a></p>
<p><a href="encomendas.html">Encomendas</a></p> -->

<nav class="navbar navbar-expand-lg navbar-light bg-white"> <!-- navbar-light bg-light -->
<a class="navbar-brand" href="#"><!-- Navbar --></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
<ul class="navbar-nav ">
<li class="nav-item">
<a class="nav-link" href="analise-de-estoque.html">Análise de Estoque</a>
</li>
<li class="nav-item ">
<a class="nav-link" href="busca-de-produtos.php">Busca de Produtos <span class="sr-only">(current)</span> </a>
</li>
<li class="nav-item active">
<a class="nav-link" href="home.php">Cadastro de Produtos</a>
</li>
<li class="nav-item">
<a class="nav-link" href="encomendas.html">Encomendas</a>
</li>
</ul>
</div>
</nav>

</div> <br>
        
        
        
        <!-- <div class="formulario"> -->

            <h1>Cadastro de Produtos</h1>

            <br>
            
            <div class="box-conteudo">

                <div class="img-produto">

                <h1>Cadastro de um novo produto</h1>

                    <form action="home.php" method="POST" enctype="multipart/form-data">
                    Arquivo: <input type="file" required name="arquivo">
                    <input type="submit" value="Salvar">
                    </form>

                    <!-- <div class="botão">
                        <input id="entrar" type="submit" value="Salvar Alterações"> 
                    </div> -->

                   <!--  <div class="botão">
                        <input id="entrar" type="submit" value="Cancelar"> 
                    </div> -->

                </div>
            
                <div class="formulario">

                        <form action="home.php" method = "POST">

                            <label for="fname">Nome</label> <br>
                            <input type="text" id="NomeProduto" name="NomeProduto" placeholder="Seu nome"> <br>
                        
                            <label for="lname">Validade</label> <br>
                            <input type="text" id="Validade" name="Validade" placeholder="Data de validade"> <br>
                               
                             <br>

                            <label for= "marca">Marca</label> <br>
                            <input type= "text" id="Marca" name="Marca" placeholder="Marca">
                                
                            <br>

                            <label for="odio">Preço Individual</label> <br>
                            <input type="number" id="PreçoQTD" name="PreçoQTD" placeholder="Preço Individual"> <br>

                            <label for="amor">Preço Engradado</label> <br>
                            <input type="number" id="PreçoEGD" name="PreçoEGD" placeholder="Preço Engradado"> <br>

                            <label for="Fornecedor">Fornecedores</label> <br>
                            <input type = "text" id="Fornecedor" name="Fornecedor" placeholder="Preço Engradado">
                             <br>

                            <label for="fname">Lote</label> <br>
                            <input type="text" id="Lote" name="Lote" placeholder="Lote"> <br>

                            <input type="submit" name="submit" value="Confirmar">

                            </form>

                        <!-- IMAGEM DO PRODUTO -->
                        </div>
                </div>
</div>

                <br><br><br><br>


        </div>
        
        <script src="js/mobile_navbar.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>