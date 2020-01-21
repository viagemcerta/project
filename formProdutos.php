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
    <h1 class="text-center">Adicionar Produto</h1>
<form>
  <div class="form">
    <div class="form-group ">
      <label for="inputName4">Nome</label>
      <input type="text" class="form-control" id="inputName4">
    </div>
    <div class="form-group  ">
      <label for="inputEmail4">Categoria</label>
      <input type="text" class="form-control" id="inputEmail4">
    </div>
  </div>
  <div class="form-group ">
    <label for="inputData">Valor</label>
    <input type="text" class="form-control" id="inputdata" placeholder="R$">
  </div>
  <div class="form-group ">
    <label for="inputCpf">Quantidade</label>
    <input type="text" class="form-control" id="inputCpf" >
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Abastecimento</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
      <button type="submit" class="btn btn-link">Cadastrar</button>
    </div>
  </div>
</form>
</div>

<?php 

include('footer.php');

?>