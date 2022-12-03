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

        header('Location: index.php');
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - CapyStock</title>

    <!-- <link href='https://fonts.googleapis.com/css?family=Kiwi Maru' rel='stylesheet'> -->

    <link rel="stylesheet" href="css/cadastro.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  

  <div class="d-lg-flex half">
    <div class="bg order-2 order-md-1" style="background-image: url('imgs/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Cadastre-se em <strong>CapyStock</strong></h3>
            <p class="mb-4">Organização e Gerenciamento de Estoque!</p>

            <form action="cadastro.php" method="POST">

              <div class="form-group first">
                <label for="username">Nome Completo</label>
                <input type="text" class="form-control" placeholder="Capy Stock da Silva" id="username" name="nome" minlenth="4">
              </div>

              <div class="form-group first">
                <label for="username">Nome da Empresa</label>
                <input type="text" class="form-control" placeholder="Capy Stock 2" id="username" name="empresa" minlenth="4">
              </div>

              <div class="form-group last mb-3">
                <label for="password">CPF/CNPJ</label>
                <input type="text" class="form-control" placeholder="12345678910" id="password" name="cpfcnpj" maxlength="10">
              </div>

              <div class="form-group last mb-3">
                <label for="password">Email</label>
                <input type="email" class="form-control" placeholder="seu-email@gmail.com" id="Email" name="email" >
              </div>

              <div class="form-group last mb-3">
                <label for="password">Senha</label>
                <input type="password" class="form-control" placeholder="Capy123.Stock321" id="password" name="senha" minlenth="4">
              </div>

              <input type="submit" value="Cadastrar-se" class="btn btn-block btn-success" style="background-color: #48d3a9;" name="submit">
              <br>
              <div class="ml-auto"><a href="index.php" class="forgot-pass font-weight-bold">Já tem um conta?</a></div>
            </form>
            <br>

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>