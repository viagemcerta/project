<?php
include("header.php");
$id = $_GET['id'];

include("connection.php"); 

$query = "select * from addcliente where id_cliente = '$id'";
$queryBanco = mysqli_query($conn, $query);
$array = mysqli_fetch_array($queryBanco);


$nome = $array['nome'];
$email = $array['email']; 
$cpf = $array['CPF']; 
$dta_nascimento = $array['dta_nascimento'];


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
<button name="addcliente" type="submit" class="btn btn-outline cadastro">Atualizar</button>
</form>
</div>';


include("footer.php");
?>


<script>
$('#idCliente').css("display","none");


</script>