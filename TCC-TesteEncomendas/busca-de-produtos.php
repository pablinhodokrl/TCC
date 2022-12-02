<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca de Produtos</title>

    <link href='https://fonts.googleapis.com/css?family=Kiwi Maru' rel='stylesheet'>
    <link rel="stylesheet" href="css/busca-de-produtos.css">
    <link rel="icon" type="image/x-icon" href="imgs/logoT.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

    <!-- <div class="container-fluid"> -->

        <!-- <div class="container-fluid"> -->
          
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
      <li class="nav-item active">
        <a class="nav-link" href="busca-de-produtos.php">Busca de Produtos <span class="sr-only">(current)</span> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home.php">Cadastro de Produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="encomendas.php">Encomendas</a>
      </li>
    </ul>
  </div>
</nav>

    </div> <br>
    


    

        <!-- Código em si -->

        <div class="container-fluid">

        <!-- TESTANDO TABELA -->

        <div class="table-responsive">
                    <table class="table table-hover">
                            <thead>
                                <th>ID</th>   
                                <th>Título</th>
                                <th>Quantidade</th>
                                <th>Ações</th>
                                <th>Situação</th>
                            </thead>
                          <tbody>                      
                            <?php
                             //Chamando banco de dados
                             include("config.php");
                             //selecionando o banco de dados
                             $bd = mysqli_select_db($conexao, "mydb");
                            //fazendo a seleção da tabela tb_evento
                            $sql = "SELECT * FROM cadastroproduto ORDER BY id ASC";
                            //pegando os dados da tabela. Executando query
                            $resultado = mysqli_query($conexao, $sql);
                            while($linha = mysqli_fetch_array($resultado))
                            {
                               echo '<tr>';                  
                                   echo  '<td>'.$linha['id'].'</td>';
                                   echo  '<td>'.$linha['NomeProduto'].'</td>';
                                   echo  '<td>'.$linha['Quantidade'].'</td>'; 
                                   //Ações                                      
                                   echo  
                                   "<td>
                                   <button type='button' class='btn btn-sm btn-info'  data-toggle='modal' data-target='#myModal$linha[id]'> 
                                   Mostrar</button>&nbsp


                                  <button type='button' class='btn btn-sm btn-warning' data-toggle='modal' data-target='#myModalEditar$linha[id]'> Editar </button>&nbsp


                                   <button type='button' class='btn btn-sm btn-danger' data-toggle='modal' data-target='#myModalApagar$linha[id]'> Deletar </button>
                                   </td>";

                                   $PontoDePartida = 100;
                                   $QuantProduto = $linha['Quantidade'];
                                   /* $PorcProduto = $QuantProduto */

                                   /* if (){

                                   } else {

                                   } */
                                                                       
                                   echo "<td> $QuantProduto </td>";

                              echo "</tr>";


                              
                              ?>

                                  <!--Inicio Modal APAGAR-->
                                  <div class="modal fade" id="myModalApagar<?php echo $linha['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                           <h3 class="modal-title" id="myModalLabel"> Visualizar Produto: Id <?php echo $linha['id'];?></h3>
                                          </div>

                                          <div class="modal-body">
                                               <b>Nome do Produto: </b><?php echo $linha['NomeProduto'];?><br>

                                               <form action="proc-deletar-produto.php" method="POST">
                                               <div class="form-group ">
                                                  <input class="form-control" type="hidden" name="idProduto" id="email" placeholder="Ex: Água" value="<?php echo $linha['id']; ?>">
                                                </div>

                                                  <b>TEM CERTEZA QUE DESEJA DELETAR ESSE PRODUTO?</b> <br>
                                                  <b>(ESSA TAREFA NÃO PODE SER DESFEITA)</b> <br>

                                                <div class="form-group text-center">
                                                  <button type="submit" name="submit" class="btn btn-danger">DELETAR</button>
                                                </div>

                                               </form>
                                                       
                                          </div>
                                          
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                  <!--Fim Modal APAGAR-->


                                 <!--Inicio Modal VISUALIZAR-->
                                  <div class="modal fade" id="myModal<?php echo $linha['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><!-- <span aria-hidden="true">&times; --></span></button>
                                           <h3 class="modal-title" id="myModalLabel"> Visualizar Produto: Id <?php echo $linha['id'];?></h3>
                                          </div>

                                          <div class="modal-body">
                                               <b>Nome do Produto: </b><?php echo $linha['NomeProduto'];?><br><hr>
                                               <b>Quantidade: </b><?php echo $linha['Quantidade'];?><br><hr>
                                               <b>Validade: </b><?php echo $linha['Validade'];?><br><hr>
                                               <b>Marca: </b><?php echo $linha['Marca'];?><br><hr>
                                               <b>Valor Unitário: </b><?php echo $linha['PreçoQTD'];?><br><hr>
                                               <b>Valor Engradado: </b><?php echo $linha['PreçoEGD'];?><br><hr>
                                               <b>Fornecedor: </b><?php echo $linha['Fornecedor'];?><br>            
                                          </div>
                                          
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                  <!--Fim Modal VISUALIZAR-->

                                  <!--Começo Modal EDITAR-->
                                  <div class="modal fade" id="myModalEditar<?php echo $linha['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><!-- <span aria-hidden="true">&times; --></span></button>
                                           <h3 class="modal-title" id="myModalLabel"> Editar Produto: Id <?php echo $linha['id'];?></h3>
                                          </div>

                                          <div class="modal-body">

                                              <form action="proc-editar-produto.php" method="POST">

                                                <div class="form-group ">
                                                  <input class="form-control" type="hidden" name="idProduto" id="email" placeholder="Ex: Água" value="<?php echo $linha['id']; ?>">
                                                </div>

                                                <div class="form-group ">
                                                  <label for="email">Nome do Produto</label>
                                                  <input class="form-control" type="text" name="NomeProduto" id="email" placeholder="Ex: Água" value="<?php echo $linha['NomeProduto']; ?>">
                                                </div>

                                              <div class="form-group">
                                                <label for="email">Quantidade</label>
                                                <input class="form-control" type="text" name="Quantidade" id="email" placeholder="Ex: 2" value="<?php echo $linha['Quantidade']; ?>">
                                              </div>

                                                <div class="form-group ">
                                                  <label for="email">Validade</label>
                                                  <input class="form-control" type="date" name="Validade" id="email" placeholder="Ex: Água" value="<?php echo $linha['Validade']; ?>">
                                                </div>

                                                <div class="form-group ">
                                                  <label for="email">Marca</label>
                                                  <input class="form-control" type="text" name="Marca" id="email" placeholder="Ex: Água" value="<?php echo $linha['Marca']; ?>">
                                                </div>

                                                <div class="form-group ">
                                                  <label for="email">PreçoQTD</label>
                                                  <input class="form-control" type="text" name="PreçoQTD" id="email" placeholder="Ex: Água" value="<?php echo $linha['PreçoQTD']; ?>">
                                                </div>

                                                <div class="form-group ">
                                                  <label for="email">PreçoEGD</label>
                                                  <input class="form-control" type="text" name="PreçoEGD" id="email" placeholder="Ex: Água" value="<?php echo $linha['PreçoEGD']; ?>">
                                                </div>

                                                <div class="form-group ">
                                                  <label for="email">Fornecedor</label>
                                                  <input class="form-control" type="text" name="Fornecedor" id="email" placeholder="Ex: Água" value="<?php echo $linha['Fornecedor']; ?>">
                                                </div>

                                                <div class="form-group ">
                                                  <label for="email">Lote</label>
                                                  <input class="form-control" type="text" name="Lote" id="email" placeholder="Ex: Água" value="<?php echo $linha['Lote']; ?>">
                                                </div>

                                                <div class="form-group text-center">
                                                  <button type="submit" name="submit" class="btn btn-success">SALVAR ALTERAÇÕES</button>
                                                </div>
                                              </form>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                <!--fim modal EDITAR-->
                                
                                  

                                      <?php
                                };
                              /* mysqli_close($conexao); */
                              ?>

                        </tbody>
                      </table>

                            </div>
                            </div>
                              </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="js/mobile_navbar.js"></script> -->
    
</body>
</html>