<?php

include('header.php');
if(isset($_SESSION['login'])){ 
  
}else{ 
    echo ' <script>
    window.location.href = "index.php";
    </script>';
}

?>

<div class="container">
    <h1 class="text-center">Adicionar cliente</h1>
<form action="addcliente.php" method="post" >
  <div class="form">
    <div class="form-group ">
      <label for="inputName4">Nome</label>
      <input type="text" name="nome" class="form-control" id="inputName4">
    </div>
    <div class="form-group  ">
      <label for="inputEmail4">E-mail</label>
      <input type="text" class="form-control" name="email" id="inputEmail4">
    </div>
  </div>
  <div class="form-group ">
    <label for="inputData">Data de nascimento</label>
    <input type="date" class="form-control" name="dta_nascimento" id="inputdata" placeholder="00/00/0000">
  </div>
  <div class="form-group ">
    <label for="inputCpf">CPF</label>
    <input type="text" maxlength="11" class="form-control" name="CPF" id="inputCpf" placeholder="000.000.000-00">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Partida</label>
      <input type="text" class="form-control" name="partida" id="inputCity">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Destino</label>
      <input type="text" class="form-control" name="destino" id="inputCity">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Data de partida</label>
      <input type="date" class="form-control" name="dta_partida" id="inputCity">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Data de chegada</label>
      <input type="date" class="form-control" name="dta_chegada"  id="inputCity">
      <button name="addcliente" type="submit" class="btn btn-dark">Cadastrar</button>
    </div>
  </div>
</form>
</div>

<?php 

include('footer.php');

?>