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
<form class="needs-validation" action="addcliente.php" method="post" >
  <div class="form">
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputName4">Nome</label>
      <input type="text" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" maxlength="20" name="nome" class="form-control" id="inputName4" required>
    </div>
    <div class="form-group col-md-3 ">
      <label for="inputEmail4">E-mail</label>
      <input type="email" class="form-control" name="email" id="inputEmail" required>
    </div>
  <div class="form-group col-md-3">
    <label for="inputData">Data de nascimento</label>
    <input type="date"  onkeyup="dataValida()" class="form-control" name="dta_nascimento" id="clienteData" placeholder="00/00/0000" required>
    <small id="err" ></small>
  </div>
  <div class="form-group col-md-3">
    <label for="inputCpf">CPF</label>
    <input type="text" onkeyup="validarCPF()" minlength="11" maxlength="11" class="form-control" name="CPF" id="cpf" placeholder="000.000.000-00" required>
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