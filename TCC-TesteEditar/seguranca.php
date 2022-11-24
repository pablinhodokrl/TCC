<?php
//ob start tira os espaços em branco
ob_start();
session_start();
//VERIFICACAO PARA VER SE O USUARIO ESTÁ LOGADO
if(($_SESSION['email']== "") || ($_SESSION['senha']== "")){
    header("Location:index.php");
}
?>