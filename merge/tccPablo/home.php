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
    
</head>
<body>

    <div class="box">
        
        <div class="primeira-row">

            
            <a class="logo" href="busca-de-produtos.html"> 
                <p>Capy</p> 
                <img src="imgs/logoT.png" alt="logo-capy" title="Capy Estoque"> 
            </a>
            
            <!-- <a class="anav" href="#">
                <svg xmlns="" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                </svg></a> -->
            
            <!-- <div class="botão-profile">

                <a href="" class="btn-redondo">P</a>

            </div> -->
            
            <button  onclick="openMenu()">
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </button>

        </div>

        <div class="segunda-row">
            <p><a href="analise-de-estoque.html">Análise de Estoque</a></p>
            <p><a href="busca-de-produtos.html">Busca de Produtos</a></p>
            <p><a href="home.php">Cadastro de Produtos</a></p>
            <p><a href="encomendas.html">Encomendas</a></p>

        </div> <br>
        
        
        
        <!-- <div class="formulario"> -->

            <h1>Cadastro de Produtos</h1>

            <br>
            
            <div class="box-conteudo">

                <div class="img-produto">

                    <h1>Cadastro de um novo produto</h1>
                    
                    <input type="file" src="http://example.com/path/to/image.png" />

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
    </body>
</html>