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
    <h1 class="text-center" style="color: #38B6FF; text-align:center;">Adicionar produto</h1>
    <form action="addproduto.php" method="post" >
<div class="form">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName4">Produto</label>
      <input type="text" name="nomeProduto" class="form-control" id="inputName4" placeholder="produto" required>
    </div>
    <div class="form-group col-md-6">
    <select required name="categoria" class="custom-select form-control" id="inputGroupSelect">
    <option >Categoria...</option>
    <option>Pacote</option>
    <option>Hospedagem</option>
    <option>Voo</option>
    </select>
    </div>
  <div class="form-group col-md-6">
    <label for="inputData">Preço</label>
    <input type="number"  class="form-control" name="valor" id="inputdata" placeholder="R$" required>
  </div>
  <div class="form-group col-md-6">
    <label for="inputCpf">Quantidade</label>
    <input type="number" class="form-control" name="qnt_estoque" id="inputCpf" required>
  </div>
  <div class="form-row w-100">
    <div class="form-group col-md-6">
      <label for="inputCity">Data de abastecimento</label>
      <input onkeyup="dataAbastecimento()" type="date" class="form-control" name="dta_abastecimento" id="abastecimento" required>
      <small id="err" ></small>
    </div>
    <div>
    <button type="submit" name="cadastrar" id="produtos" class="btn btn-outline cadastro">Cadastrar</button>
    </div>
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