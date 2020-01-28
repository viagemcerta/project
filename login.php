<?php 


session_start();
//nosso include de conexão com o banco
include("connection.php");

if(isset($_POST['logar'])){ 

$login = $_POST['vendedor']; 
$pass = $_POST['senha']; 



$queryLogin = "select * from login where vendedor = '$login' and senha = '$pass' "; 
$queryBanco = mysqli_query($conn, $queryLogin);
$queryArray = mysqli_fetch_array($queryBanco);

if($login == $queryArray['vendedor'] && $pass == $queryArray['senha']){ 
  echo "logado com sucesso!";
  $_SESSION['login'] = $login;
  header("refresh:3;url= painel.php");
}else{ 
  echo "Erro ao tentar fazer login";
  header("refresh:3;url= index.php");
}





}




















?> 