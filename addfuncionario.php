<?php
session_start();


if(isset($_POST['cadastrar'])){ 

include("connection.php");


$nome = $_POST['nomeFuncionario'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = md5($_POST['senha']);
$cargo = $_POST['cargo'];
$godPass = md5("adm");
$query = "insert into funcionario (nomeFuncionario,email,login,senha,cargo,godPass, admFunc)
values('$nome','$email','$login','$senha','$cargo','$godPass', 0)";

if(mysqli_query($conn, $query)){ 
    echo ' <script>window.location.href = "painel.php"</script>';
    $_SESSION['cadastrado'] = "cadastrado!";
}else{ 
    echo ' <script>window.location.href = "painel.php"</script>';
    $_SESSION['cadastrado'] = "Erro ao cadastrar!";
}




}


?>