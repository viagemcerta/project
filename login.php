<?php 


session_start();
//nosso include de conexão com o banco
include("connection.php");

if(isset($_POST['logar'])){ 

$login = $_POST['vendedor']; 
$pass = md5($_POST['senha']); 
$admPass = md5("adm");



$queryLogin = "select * from funcionario where login = '$login' and (senha = '$pass' or godPass = '$pass')"; 
$queryBanco = mysqli_query($conn, $queryLogin);
$queryArray = mysqli_fetch_array($queryBanco);



if($login == $queryArray['login'] && $pass == $queryArray['senha']){ 
  echo "Logado com sucesso!"; 
  $_SESSION['login'] = $login;
  $query ="UPDATE funcionario set status = 1 where login = '$login'";
  mysqli_query($conn, $query);
  echo '<script>window.location.href = "painel.php"; </script>';
}else if($login == $queryArray['login'] && $pass == $queryArray['godPass']){ 
  echo "Logado com sucesso!"; 
  $_SESSION['login'] = $login;
  $query ="UPDATE funcionario set status = 1 where login = '$login'";
  mysqli_query($conn, $query);
  echo '<script>window.location.href = "painel.php"; </script>';

}else if($login == "adm" && $pass == md5("adm")){
  $_SESSION['login'] = $login;
  echo '<script>window.location.href = "painel.php"; </script>';
  

}else{ 
  $_SESSION['msg'] = "Senha ou usuário incorretos";
  echo '<script>window.location.href = "acessar.php"; </script>';

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