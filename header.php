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

  <nav class="navbar navbar-expand-lg navbar-light bg-light menucolor">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <img src="img/certa.png"  class="img-fluid w-25 p-3 imgsize" alt="">
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
  
  <img src="img/certa.png"  class="img-fluid w-25 p-3 imgsize" alt="">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link text-light " href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
    <?php
      if(isset($_SESSION['login'])){
      echo '<li class="nav-item active">
        <a class="nav-link text-light" href="listClientes.php">Controle de Clientes<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-light" href="#">Controle de Produtos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-light" href="#">Vendas<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-light" href="#">Análise<span class="sr-only">(current)</span></a>
      </li> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Olá '.$_SESSION['login'].'
        </a>
        <div class="dropdown-menu onlyblack" aria-labelledby="navbarDropdown">
          <a  class="dropdown-item "  href="logout.php">Sair</a>
        </div>
      </li>
  
      
      
      
      ';
      
    }else{ 
      echo '<li class="nav-item active ">
      <a class="nav-link text-light" href="acessar.php">Entrar <span class="sr-only">(current)</span></a>
    </li>';

      }
      ?>
    </ul>
  </div>
</nav>

<!--
  <div class="menu">
    <ul class="nav justify-content-center">
    <button type="button" class="btn btn-outline" href="index.php">Home</button>
    <button type="button" class="btn btn-outline" href="clientes.php">Controle de Clientes</button>
    <button type="button" class="btn btn-outline" href="produtos.php">Controle de Produtos</button>
    <button type="button" class="btn btn-outline" href="vendas.php">Vendas</button>
    <button type="button" class="btn btn-outline" href="analise.php">Análise</button>  
    <a href="acessar.php"><button type="button" class="btn btn-outline" >Logar</button></a>  
    <label><?php if(isset($_SESSION['login'])){echo " Bem-vindo: "; echo $_SESSION['login']; echo '<a href="logout.php" ><button type="button" class="btn btn-primary btn-lg"   name="logout">Logout</button></a>';}else{echo "Desconectado"; echo  "<br>"; } ?></label>
 
    </ul>    
    
</div> -->