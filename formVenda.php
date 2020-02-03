<?php

include('header.php');
if(isset($_SESSION['login'])){ 
  
}else{ 
    echo ' <script>
    window.location.href = "index.php";
    </script>';
}

?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/jquery.mask.min.js"></script>

<div class="container">
  <div class="titulo">
    <h1 class="text-center" style="text-align:center;">Efetuar Venda</h1>
  </div>
<form action="addvenda.php" method="post" >
  <div class="form">
  <div class="form-row">
  <div class="form-group col-md-3">
    <label for="inputCpf">CPF</label>
    <input type="text" minlength="11" maxlength="11" class="form-control" name="CPF" id="cpf" placeholder="000.000.000-00">
  </div>
    <div class="form-group col-md-3 ">
      <label for="inputEmail4">Produto</label>
      <input type="text" class="form-control" name="produto" id="inputProduto">
    </div>
  <div class="form-group col-md-3">
  <select class="custom-select form-control" id="inputGroupSelect">
    <option selected>Categoria...</option>
    <option>Pacote</option>
    <option>Hospedagem</option>
    <option>Voo</option>
    </select>
  </div>
  <div class="form-group col-md-3">
    <label for="inputCpf">Preço</label>
    <input type="" maxlength="11" class="form-control" name="preço" id="inputCpf" placeholder="R$">
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

<script type="text/javascript">
            $("#cpf").mask("000.000.000-00");
</script>

<?php 

include('footer.php');

?>