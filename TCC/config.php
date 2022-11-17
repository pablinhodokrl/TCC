<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'mydb';
    
    $conexao = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);

    /* if($conexao->connect_errno)
     {
         echo "Erro";
     }
     else
     {
        echo "Conexão efetuada com sucesso";
    } */
 
?>