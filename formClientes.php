<?php

include('header.php');
if(isset($_SESSION['login'])){ 
  
}else{ 
    echo ' <script>
    window.location.href = "index.php";
    </script>';
    unset($_SESSION['cadastrado']);
}

?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/jquery.mask.min.js"></script>

<div class="container">
    <h1 class="text-center" style="color: #38B6FF; text-align:center;">Adicionar cliente</h1>
<form action="addcliente.php" method="post" >
  <div class="form">
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputName4">Nome</label>
      <input type="text" name="nome" class="form-control" id="inputName4">
    </div>
    <div class="form-group col-md-3 ">
      <label for="inputEmail4">E-mail</label>
      <input type="text" class="form-control" name="email" id="inputEmail4">
    </div>
  <div class="form-group col-md-3">
    <label for="inputData">Data de nascimento</label>
    <input type="date" class="form-control" name="dta_nascimento" id="inputdata" placeholder="00/00/0000">
  </div>
  <div class="form-group col-md-3">
    <label for="inputCpf">CPF</label>
    <input type="text" maxlength="11" class="form-control" name="CPF" id="cpf" placeholder="000.000.000-00">
  </div>
    <button name="addcliente"id="addcliente" type="submit" class="btn btn-outline cadastro">Cadastrar</button>
</form>
</div>
<?php 
if(isset($_SESSION['cadastrado'])){

  echo  '<label class="text-center mx-auto text-uppercase text-success" >'.$_SESSION['cadastrado'].'</label>'; 
  unset($_SESSION['cadastrado']);
  
  }else{ 

    
  }
  
  
  ?>




<?php 

include('footer.php');

?>