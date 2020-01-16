<?php 


session_start();
//nosso include de conexão com o banco
include("connection.php");

if(isset($_POST['logar'])){ 

$login = $_POST['vendedor']; 
$pass = $_POST['senha']; 






//Fazendo a validação de login para saber se o login está correto
$queryValidate = " select * from login where vendedor = '$login' and senha = $pass";
if(mysqli_query($conn, $queryValidate)){ 
    echo "Login success! ";
    $_SESSION['login'] = $login;
  //Isso vai dar problema depois quando for subir o site, então devemos trocar por um redirecionamento js
  header("refresh:3;url= index.php");

}else{ 
    echo "Failed to login";
    $logado = 2;
    //Isso vai dar problema depois quando for subir o site, então devemos trocar por um redirecionamento js
    header("refresh:3;url= index.php");
}



}




if(isset($_POST{'logout'})){ 
  session_destroy(); 
  header("refresh:3;url= index.php");
}




















?> 