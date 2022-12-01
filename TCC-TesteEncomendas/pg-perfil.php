<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Perfil</title>

    <link href='https://fonts.googleapis.com/css?family=Kiwi Maru' rel='stylesheet'>

    <link rel="stylesheet" href="css/pg-perfil.css">

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

</div>
    
    <div class="container">
    <h1>Editar Perfil</h1>
      <hr>
	<div class="row">
      <!-- coluna da esquerda -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="imgs/logoT.png" class="avatar img-circle img-thumbnail" alt="avatar">
          <h6>Upar uma foto diferente</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- coluna de ediar-->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          Lembre-se de colocar o <strong>nome da sua empresa</strong> em editar perfil.
        </div>
        <h3>Informações de perfil</h3>
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Nome Completo</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" placeholder="Capy Stock da Silva" name="nome">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">CPF/CNPJ</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" placeholder="123.456.789-10" name="cpf/cnpj">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Nome da empresa</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" placeholder="Adega Capy" name="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" placeholder="seu-email@gmail.com">
            </div>
          </div>

            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>

<style type="text/css">
				                
body{margin-top:20px;}
.avatar{
width:200px;
height:200px;
}				              
</style>

<script type="text/javascript">

</script>






        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>