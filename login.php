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
  echo "Logado com sucesso"; 
  $_SESSION['login'] = $login;
  header("refresh:3;url= painel.php");
  
}else if($login == "adm" && $pass == "adm"){
  echo "Logado como ADM com sucesso"; 
  $_SESSION['login'] = $login;
  header("refresh:3;url= painel.php");
 
 
}else if($login == null || $pass == null) {
  echo "Usuário ou senha incorretos";
  echo "<br> Por favor contatar o administrador";
  header("refresh:3;url= acessar.php");
  
}else{ 
  echo "Usuário ou senha incorretos";
  echo "<br> Por favor contatar o administrador";
  header("refresh:3;url= acessar.php");

}

// if($login == $queryArray['vendedor'] && $pass == $queryArray['senha']){ 
//   echo "logado com sucesso!";
//   $_SESSION['login'] = $login;
//   header("refresh:3;url= painel.php");
// }else{ 
//   echo "Erro ao tentar fazer loginm";
//   header("refresh:3;url= index.php");
// }






}




















?> 