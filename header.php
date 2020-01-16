<?php


include("login.php");


?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Bem Vindo, ...</title>
  </head>
  <body>

  <div class="menu">
    <img src="img/certa.png" alt="">
    <ul class="nav justify-content-center">
    <button type="button" class="btn btn-outline" href="index.php">Home</button>
    <button type="button" class="btn btn-outline" href="clientes.php">Controle de Clientes</button>
    <button type="button" class="btn btn-outline" href="produtos.php">Controle de Produtos</button>
    <button type="button" class="btn btn-outline" href="vendas.php">Vendas</button>
    <button type="button" class="btn btn-outline" href="analise.php">Análise</button>  
    <a href="acessar.php"><button type="button" class="btn btn-outline" >Logar</button></a>  
    <label><?php if(isset($_SESSION['login'])){echo " Bem-vindo: "; echo $_SESSION['login']; echo '<a href="logout.php" ><button type="button" class="btn btn-primary btn-lg"   name="logout">Logout</button></a>';}else{echo "Desconectado"; echo  "<br>"; } ?></label>
 
    </ul>    
    
</div>