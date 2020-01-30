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
  <div class="titulo">
    <h1 class="text-center" style="text-align:center;">Efetuar Venda</h1>
  </div>
<form action="addvenda.php" method="post" >
  <div class="form">
  <div class="form-row">
  <div class="form-group col-md-3">
    <label for="inputCpf">CPF</label>
    <input type="number" maxlength="11" class="form-control" name="CPF" id="inputCpf" placeholder="000.000.000-00">
  </div>
    <div class="form-group col-md-3 ">
      <label for="inputEmail4">Produto</label>
      <input type="text" class="form-control" name="produto" id="inputEmail4">
    </div>
  <div class="form-group col-md-3">
    <label for="inputData">Categoria</label>
    <input type="text" class="form-control" name="categoria" id="inputdata" >
  </div>
  <div class="form-group col-md-3">
    <label for="inputCpf">Preço</label>
    <input type="number" maxlength="11" class="form-control" name="preço" id="inputCpf" placeholder="R$">
  </div>
  <div class="form-row w-100">
    <div class="form-group col-md-3">
      <label for="inputCity">Partida</label>
      <input type="text" class="form-control" name="partida" id="inputCity">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Destino</label>
      <input type="text" class="form-control" name="destino" id="inputCity">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Data de partida</label>
      <input type="date" class="form-control" name="dta_partida" id="inputCity">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Data de chegada</label>
      <input type="date" class="form-control" name="dta_chegada"  id="inputCity">
    </div>
    <button name="addvenda" type="submit" class="btn btn-outline cadastro">Finalizar venda</button>
</form>
</div>

<?php 

include('footer.php');

?>