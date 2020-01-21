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
<form>
  <div class="form">
    <div class="form-group ">
      <label for="inputName4">Nome</label>
      <input type="text" class="form-control" id="inputName4">
    </div>
    <div class="form-group  ">
      <label for="inputEmail4">E-mail</label>
      <input type="text" class="form-control" id="inputEmail4">
    </div>
  </div>
  <div class="form-group ">
    <label for="inputData">Data de nascimento</label>
    <input type="date" class="form-control" id="inputdata" placeholder="00/00/0000">
  </div>
  <div class="form-group ">
    <label for="inputCpf">CPF</label>
    <input type="text" maxlength="11" class="form-control" id="inputCpf" placeholder="000.000.000-00">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Partida</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Destino</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Data de partida</label>
      <input type="date" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Data de chegada</label>
      <input type="date" class="form-control" id="inputCity">
      <button type="submit" class="btn btn-link">Cadastrar</button>
    </div>
  </div>
</form>
</div>

<?php 

include('footer.php');

?>