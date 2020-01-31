<?php
include("header.php");
$id = $_GET['id'];

include("connection.php"); 

<<<<<<< HEAD
$query = "select * FROM addcliente where id_cliente = $id";

if($sql = mysqli_query($conn, $query)){ 
    echo "Editado com sucesso! ";
}else{ 
    echo "err";
}
=======
$query = "select * from addcliente where id_cliente = '$id'";
$queryBanco = mysqli_query($conn, $query);
$array = mysqli_fetch_array($queryBanco);


$nome = $array['nome'];
$email = $array['email']; 
$cpf = $array['CPF']; 
$dta_nascimento = $array['dta_nascimento'];
$destino = $array['destino']; 
$partida = $array['partida']; 
$dta_partida = $array['dta_partida']; 
$dta_chegada = $array['dta_chegada'];


echo '<div class="container">

<h1 class="text-center" style="color: #38B6FF; text-align:center;">Atualizar cliente</h1>
<form action="updateCliente.php" method="post" >
<div class="form">
<div class="form-row">
<input name="id" type="text" id="idCliente" value='.$id.'>
<div class="form-group col-md-3">
  <label for="inputName4">Nome</label>
  <input type="text" name="nome" value="'.$nome.'" class="form-control" id="inputName4">
</div>
<div class="form-group col-md-3 ">
  <label for="inputEmail4">E-mail</label>
  <input type="text" class="form-control" value="'.$email.'" name="email" id="inputEmail4">
</div>
<div class="form-group col-md-3">
<label for="inputData">Data de nascimento</label>
<input type="date" class="form-control" value="'.$dta_nascimento.'"name="dta_nascimento" id="inputdata" placeholder="00/00/0000">
</div>
<div class="form-group col-md-3">
<label for="inputCpf">CPF</label>
<input type="text" maxlength="11" class="form-control"value="'.$cpf.'" name="CPF" id="cpf" placeholder="000.000.000-00">
</div>
<div class="form-row w-100">
<div class="form-group col-md-3">
  <label for="inputCity">Partida</label>
  <input type="text" class="form-control" value="'.$partida.'" name="partida" id="inputCity">
</div>
<div class="form-group col-md-3">
  <label for="inputState">Destino</label>
  <input type="text" class="form-control" value="'.$destino.'" name="destino" id="inputCity">
</div>
<div class="form-group col-md-3">
  <label for="inputState">Data de partida</label>
  <input type="date" class="form-control" value="'.$dta_partida.'" name="dta_partida" id="inputCity">
</div>
<div class="form-group col-md-3">
  <label for="inputState">Data de chegada</label>
  <input type="date" class="form-control" value="'.$dta_chegada.'" name="dta_chegada"  id="inputCity">
</div>
<button name="addcliente" type="submit" class="btn btn-outline cadastro">Atualizar</button>
</form>
</div>';
>>>>>>> origin/victor

$list = mysqli_fetch_array($sql);
$nome = $list['nome'];
$email = $list['email']; 
$cpf = $list['CPF']; 
$dta_nascimento = $list['dta_nascimento'];
$destino = $list['destino']; 
$partida = $list['partida']; 
$dta_partida = $list['dta_partida']; 
$dta_chegada = $list['dta_chegada'];

<<<<<<< HEAD
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
=======
include("footer.php");
?>


<script>
$('#idCliente').css("display","none");

>>>>>>> origin/victor

</script>