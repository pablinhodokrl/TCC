<?php

$email=$_POST['email'];
$senha=$_POST['senha'];
 //$login=  mysql_real_escape_string($login);
 //$senha= mysql_real_escape_string($senha);

include("config.php");

mysqli_select_db($conexao,"mybd");

$sql= mysqli_query($conexao, "SELECT * FROM tb_usuario where nm_email='$email' and nm_senha='$senha'") or die(mysqli_error());
    $cont = mysqli_num_rows($sql);
        if($cont>0){
        session_start();
        $_SESSION['email']=$email;
        $_SESSION['senha']=$senha;
        header("Location:home.php"); 
        }
        else{
            header("Location:index.php");
        }
        
        mysqli_close($conexao);
?>