<?php

include("connection.php");
include("login.php");
//utilizei para mostrar para o professor de startup
//$_SESSION['login'] = "testeProfessor";
if(isset($_SESSION['login'])){
$login = $_SESSION['login'];
$query = "select * from funcionario where login ='$login'";
$queryBanco = mysqli_query($conn, $query);
$array = mysqli_fetch_array($queryBanco);
$modoAdm = $array['admFunc'];
}



?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    

    <title>VIAGEM CERTA</title>
  </head>
  <body>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="js/jquery.mask.min.js"></script>

  <nav class="navbar navbar-expand-lg navbar-light bg-light menucolor">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 
  
  <img src="img/VIAGEMCERTA.png"  class="img-fluid w-25 p-3 imgsize " alt="">

  <div class="collapse navbar-collapse menucolor col-sm-9" id="navbarSupportedContent">
    <ul class="text-uppercase w-100 navbar-nav mx-auto">
      <li class="nav-item active espaco">
        <a class="nav-link text-light " href="painel.php">Home <span class="sr-only">(current)</span></a>
      </li>
    
      <li class="nav-item dropdown espaco">
        <a class="nav-link dropdown-toggle text-light" href="" id="navbarDropdown" role="button" 
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clientes</a>
        <div class="dropdown-menu onlyblack" aria-labelledby="navbarDropdown">
          <a  class="dropdown-item "  href="listClientes.php">Lista de Clientes</a>
          <a  class="dropdown-item "  href="formClientes.php">Adicionar Clientes</a>
        </div>
      </li>
      <li class="nav-item dropdown espaco">
        <a class="nav-link dropdown-toggle text-light" href="" id="navbarDropdown" role="button" 
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
        <div class="dropdown-menu onlyblack" aria-labelledby="navbarDropdown">
          <a  class="dropdown-item "  href="listProdutos.php">Lista de Produtos</a>
          <a  class="dropdown-item "  href="formProdutos.php">Adicionar Produtos</a>
        </div>
      </li>
      <li class="nav-item dropdown espaco">
        <a class="nav-link dropdown-toggle text-light" href="" id="navbarDropdown" role="button" 
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vendas</a>
        <div class="dropdown-menu onlyblack" aria-labelledby="navbarDropdown">
          <a  class="dropdown-item "  href="listVendas.php">Lista de vendas</a>
          <a  class="dropdown-item "  href="formVenda.php">Adicionar vendas</a>
          <a  class="dropdown-item "  href="listVendasDisponiveis.php">Vendas disponíveis</a>
        </div>
      </li>
      <?php 
      
      
      if($modoAdm == 1 || $_SESSION['login'] == "adm"){
      echo '
      <li class="nav-item active espaco">
        <a class="nav-link text-light" data-toggle="modal" data-target="#exampleModalCenter" href="analise.php">Cadastrar Funcionário<span class="sr-only">(current)</span></a>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
             <h5 class="modal-title text-center" id="exampleModalCenterTitle">Cadastro de Funcionário</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
            </div>
           <div class="modal-body">

            <form action="addfuncionario.php" method="post">
            <div class="form-row">
              <div class="col-md-6 mb-4">
                <label for="validationDefault01">Login</label>
                <input type="text" name="login" class="form-control" id="validationDefault01" required>
              </div>
              <div class="col-md-6 mb-4">
                <label for="validationDefault02">Nome</label>
                <input type="text" name="nomeFuncionario" class="form-control" id="validationDefault02" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault03">E-mail</label>
                <input type="text" name="email" class="form-control" id="validationDefault03" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault04">Senha</label>
                <input type="password" name="senha" class="form-control" id="validationDefault04"  required>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationDefault05">Cargo</label>
                <input type="text" name="cargo" class="form-control" id="validationDefault05" required>
              </div>
              </div>
              <div class="modal-footer">
             <button type="submit" name="cadastrar" class="btn btn-primary">Cadastrar</button>
            </div>
            </form>
            </div>
          </div>
        </div>
      </div>
      </li> ';
      }
      ?>
      <li class="nav-item dropdown espaco">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" 
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <?php echo  'Olá '.$_SESSION['login'].' '; ?>
        </a>
        <div class="dropdown-menu onlyblack" aria-labelledby="navbarDropdown">
          <?php
          if($modoAdm == 1 || $_SESSION['login'] == "adm"){ 
          echo '<a  class="dropdown-item "  href="adm.php">adm</a>';
          }
          ?>
          <a  class="dropdown-item "  href="logout.php">Sair</a>
        </div>
        
      </li>
    </ul>
  </div>
</nav>
<?php 
if(isset($_SESSION['cadastrado'])){

  echo  '<label class="text-center mx-auto text-uppercase text-success" >'.$_SESSION['cadastrado'].'</label>'; 
  unset($_SESSION['cadastrado']);
  
  }else{ 

    
  }
  
  
  ?>

<p></p>

<!--
  <div class="menu">
    <ul class="nav justify-content-center">
    <button type="button" class="btn btn-outline" href="index.php">Home</button>
    <button type="button" class="btn btn-outline" href="clientes.php">Controle de Clientes</button>
    <button type="button" class="btn btn-outline" href="produtos.php">Controle de Produtos</button>
    <button type="button" class="btn btn-outline" href="vendas.php">Vendas</button>
    <button type="button" class="btn btn-outline" href="analise.php">Análise</button>  
    <a href="acessar.php"><button type="button" class="btn btn-outline" >Logar</button></a>  
    <label><?php if(isset($_SESSION['login'])){echo " Bem-vindo: "; echo $_SESSION['login']; 
      echo '<a href="logout.php" >
      <button type="button" class="btn btn-primary btn-lg"   
      name="logout">Logout</button></a>';}else{echo "Desconectado"; echo  "<br>"; } ?></label>
 
    </ul>    
    
</div> -->