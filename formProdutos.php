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
    <h1 class="text-center" style="color: #FF914D; text-align:center;">Adicionar produto</h1>
<form action="addproduto.php" method="post" >
  <div class="form">
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputName4">Nome</label>
      <input type="text" name="nome" class="form-control" id="inputName4">
    </div>
    <div class="form-group col-md-3 ">
      <label for="inputEmail4">Categoria</label>
      <input type="text" class="form-control" name="categoria" id="inputEmail4">
    </div>
  <div class="form-group col-md-3">
    <label for="inputData">Preço</label>
    <input type="number" class="form-control" name="valor" id="inputdata" placeholder="R$">
  </div>
  <div class="form-group col-md-3">
    <label for="inputCpf">Quantidade</label>
    <input type="number" class="form-control" name="qnd_estoque" id="inputCpf">
  </div>
  <div class="form-row w-100">
    <div class="form-group col-md-3">
      <label for="inputCity">Data de abastecimento</label>
      <input type="date" class="form-control" name="dta_abastecimento" id="inputCity">
    </div>
    <div>
    <button type="submit" name="cadastrar" class="btn btn-outline cadastrar">Cadastrar</button>
</div>
</form>
</div>

<?php 

include('footer.php');

?>