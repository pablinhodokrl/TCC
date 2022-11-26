<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Capy Stock</title>

    <!-- <link href='https://fonts.googleapis.com/css?family=Kiwi Maru' rel='stylesheet'> -->
    <link rel="stylesheet" href="css/estilo.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    
<div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('imgs/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Entrar em <strong>CapyStock</strong></h3>
            <p class="mb-4">Organização e Gerenciamento de Estoque!</p>
            <form action="#" method="post">
              <div class="form-group first">
                <label for="username">Email</label>
                <input type="text" class="form-control" placeholder="capy.stock@gmail.com" id="username" name="">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Senha</label>
                <input type="password" class="form-control" placeholder="Capy123.Stock321" id="password" name="">
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                  
                </label>
                <div class="ml-auto">
                  <a href="cadastro.php" class="forgot-pass font-weight-bold">Novo por aqui?</a>
                </div>

              </div>

              <input type="submit" value="Entrar" class="btn btn-block btn-success" style="background-color: #48d3a9;" name="submit">

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