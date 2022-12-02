<?php

    if(isset($_POST['submit']))
    {
        
        include_once('config.php');

        $NomeProduto = $_POST['NomeProduto'];
        $Quantidade = $_POST['Quantidade'];
        $Validade = $_POST['Validade'];
        $Marca = $_POST['Marca'];
        $PreçoQTD = $_POST['PreçoQTD'];
        $PreçoEGD = $_POST['PreçoEGD'];
        $Fornecedor = $_POST['Fornecedor'];
        $Lote = $_POST['Lote'];
        
        $sql = mysqli_query($conexao, "INSERT INTO cadastroproduto(NomeProduto,Quantidade,Validade,Marca,PreçoQTD,PreçoEGD,Fornecedor,Lote) 
        VALUES ('$NomeProduto','$Quantidade','$Validade','$Marca','$PreçoQTD','$PreçoEGD', '$Fornecedor', '$Lote')");

    }



    /* $msg = false;

        if(isset($_FILES['arquivo'])){

           $extensao =  strtolower(substr($_FILES['arquivo']['name'], -4));
           $novo_nome = md5(time()). $extensao;
           $diretorio = "upload/";

           move_uploaded_file($_FILES['arquivo']['name'], $diretorio.$novo_nome);

           $sql_code = "INSERT INTO arquivo (idCodigo, arquivo, data) VALUES(null, '$novo_nome', NOW())";


        } */
    
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
<a class="nav-link" href="encomendas.php">Encomendas</a>
</li>
</ul>
</div>
</nav>

</div> <br>
        
        
        
        <!-- <div class="formulario"> -->
            
            <div class="container-fluid">

                        <form action="home.php" method = "POST">

                        <div class="container-fluid justify-content-center ">
        <div class="row justify-content-center">
            
            <div class="col-10">
            <div class="card">
                <div class="card-body">
                <h1>Cadastro de produtos</h1>
                <form action="home.php" method="POST">

                    <div class="form-group ">
                    <label class="col-sm-3 control-label">Nome do Produto</label>
                    <input class="form-control" type="text" name="NomeProduto" id="email" placeholder="Ex: Água">
                    </div>
                    <div class="form-group justify-content-left">
                    <label for="email">Quantidade</label>
                    <input class="form-control" type="text" name="Quantidade" id="email" placeholder="Ex: 2">
                    </div>

                    <div class="form-group justify-content-left">
                    <label for="email">Validade</label>
                    <input class="form-control form-control-sm" type="date" name="Validade" id="email" placeholder="Digite o seu e-mail...">
                    </div>

                    <div class="form-group">
                    <label for="email">Marca</label>
                    <input class="form-control" type="text" name="Marca" id="email" placeholder="Ex: PepsiCo">
                    </div>
                    <div class="form-group">
                    <label for="email">Preço por Quantidade</label>
                    <input class="form-control" type="text" name="PreçoQTD" id="email" placeholder="Ex: 5.00">
                    </div>
                    <div class="form-group">
                    <label for="email">Preço por Engradado</label>
                    <input class="form-control" type="text" name="PreçoEGD" id="email" placeholder="Ex: 50.00">
                    </div>
                    <div class="form-group">
                    <label for="email">Fornecedor</label>
                    <input class="form-control" type="text" name="Fornecedor" id="email" placeholder="Ex: Coca Cola Brasil">
                    </div>
                    <div class="form-group">
                    <label for="email">Lote</label>
                    <input class="form-control" type="text" name="Lote" id="email" placeholder="Ex: 0123456">
                    </div>

                    <div class="form-group text-center">
                    <button type="submit" name="submit" class="btn btn-success" style="background-color: #48d3a9;">ENVIAR</button>
                    </div>
                 <div class="alert alert-danger d-none">
                    Preencha o campo <span id="campo-erro"></span>!
                    </div>
                </form>
                </div>
            </div>

    </div>
    </div>

<!--     <div class="col-6">
      <div class="card">
        <div class="card-body">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.6790061739257!2d-51.21348718423787!3d-30.046065581881678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951978452facd5c1%3A0x4106a3c68fa8bbe9!2sBurger%20King!5e0!3m2!1spt-BR!2sbr!4v1585791483084!5m2!1spt-BR!2sbr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div> -->
    </div>

  </div>

</div>  

<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/formulario.js"></script>

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