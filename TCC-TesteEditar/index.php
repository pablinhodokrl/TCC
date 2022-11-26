<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href='https://fonts.googleapis.com/css?family=Kiwi Maru' rel='stylesheet'>
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
    
    <div class="box">
        <div class="estrutura_lateral">
            <h1>Bem-Vindo a Capy!</h1>
            <p>Organização e Gerenciamento de Estoque!</p>
        </div>

        <div class="login">
            <h1>Faça seu Login</h1>
            <div class="icones">
                <img src="imgs/icons/google-logo.png" alt="Logo Google" title="Logo Google">

                <img src="imgs/icons/google-logo.png" alt="Logo Google" title="Logo Google">

                <img src="imgs/icons/google-logo.png" alt="Logo Google" title="Logo Google">
            </div>

            <!-- <form action="testLogin.php" method="POST"> -->

            <form action="login.php" method="POST">
               
            <input type="text" id="login" placeholder ="Email / CPF" name="usermail"> <br>
                <input type="password" id="senha" placeholder ="Senha" name="user_senha"> <br>
                
                <div class="botão">
                    <a href="busca-de-produtos.html">
                    <input id="entrar" type="submit" value="Entrar" name="submit" href="login.php">
                    </a>
                </div>
          
        </form>

        <!-- <div class="botão">
            <a href="busca-de-produtos.html">
            <input id="entrar" type="submit" value="Entrar" name="submit" href="busca-de-produtos.html">
            </a>
                </div> -->



              <div class="divisao-ou">
                <hr />
                <label>ou</label>
            <hr/></div>

            <!-- <form> -->
                <div class="botão">

                    <a href="cadastro.php">
                        <!-- <button>Cadastre-se</button> -->
                        <input id="cadastre-se" type="submit" value="Cadastre-se" href="cadastro.php">
                    </a>
                </div>
                    <!-- <button>Cadastre-se</button>
                    <P>ASDHJGFAS</P> -->
            <!-- </form> -->

        </div>
    </div>
    <script src="js/login.js"></script>

</body>
</html>