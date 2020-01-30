<?php

$id = $_GET['id'];

include("connection.php"); 

$query = "select * FROM addcliente where id_cliente = $id";

if($sql = mysqli_query($conn, $query)){ 
    echo "Editado com sucesso! ";
}else{ 
    echo "err";
}

$list = mysqli_fetch_array($sql);
$nome = $list['nome'];
$email = $list['email']; 
$cpf = $list['CPF']; 
$dta_nascimento = $list['dta_nascimento'];
$destino = $list['destino']; 
$partida = $list['partida']; 
$dta_partida = $list['dta_partida']; 
$dta_chegada = $list['dta_chegada'];

echo '
<div class="container">
    <h1 class="text-center" style="color: #FF914D; text-align:center;">Editar cliente</h1>
<form action="addcliente.php" method="post" >
  <div class="form">
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputName4">Nome</label>
      <input type="text" name="nome" class="form-control" id="inputName4" value="'.$nome.'">
    </div>
    <div class="form-group col-md-3 ">
      <label for="inputEmail4">E-mail</label>
      <input type="text" class="form-control" name="email" id="inputEmail4" value="'.$email.'">
    </div>
  <div class="form-group col-md-3">
    <label for="inputData">Data de nascimento</label>
    <input type="date" class="form-control" name="dta_nascimento" id="inputdata" placeholder="00/00/0000" value="'.$dta_nascimento.'">
  </div>
  <div class="form-group col-md-3">
    <label for="inputCpf">CPF</label>
    <input type="text" maxlength="11" class="form-control" name="CPF" id="inputCpf" placeholder="000.000.000-00" value="'.$cpf.'">
  </div>
  <div class="form-row w-100">
    <div class="form-group col-md-3">
      <label for="inputCity">Partida</label>
      <input type="text" class="form-control" name="partida" id="inputCity" value="'.$partida.'">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Destino</label>
      <input type="text" class="form-control" name="destino" id="inputCity" value="'.$destino.'">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Data de partida</label>
      <input type="date" class="form-control" name="dta_partida" id="inputCity" value="'.$dta_partida.'">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Data de chegada</label>
      <input type="date" class="form-control" name="dta_chegada"  id="inputCity" value="'.$dta_chegada.'">
    </div>
    <button name="addcliente" type="submit" class="btn btn-outline cadastro">Atualizar</button>
</form>
</div>
'

?>