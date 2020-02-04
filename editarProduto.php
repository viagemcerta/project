<?php

include("header.php");
$id = $_GET['id'];

include("connection.php");

$query = "select * from produtos where id_produto = '$id'";
$queryBanco = mysqli_query($conn, $query);
$array = mysqli_fetch_array($queryBanco);

$nome = $array['nomeProduto'];
$categoria = $array['categoria'];
$valor = $array['valor'];
$qnt_estoque = $array['qnt_estoque'];
$dta_abastecimento = $array["dta_abastecimento"];


echo '<div class="container">
<h1 class="text-center" style="color: #38B6FF; text-align:center;">Atualizar Produto</h1>
<form action="updateProduto.php" method="post" >
<div class="form">
<div class="form-row">
<input name="id" type="text" id="idCliente" value='.$id.'>
<div class="form-group col-md-6">
  <label for="inputName4">Produto</label>
  <input type="text" value="'.$nome.'" name="nomeProduto" class="form-control" id="inputName4" placeholder="Nome completo">
</div>
<div class="form-group col-md-6">
<select value="'.$categoria.'"name="categoria" class="custom-select form-control" id="inputGroupSelect">';

if($categoria == "Hospedagem"){
echo '<option>Categoria...</option>
<option >Pacote</option>
<option selected>Hospedagem</option>
<option>Voo</option>';
}else if($categoria == "Pacote"){ 
  echo '<option>Categoria...</option>
<option selected>Pacote</option>
<option>Hospedagem</option>
<option>Voo</option>';
}else if($categoria == "Voo"){ 
  echo '<option>Categoria...</option>
<option >Pacote</option>
<option>Hospedagem</option>
<option selected>Voo</option>';
}else{ 
  echo '<option selected>Categoria...</option>
<option >Pacote</option>
<option>Hospedagem</option>
<option>Voo</option>';

}

echo '</select>
</div>
<div class="form-group col-md-6">
<label for="inputData">Preço</label>
<input value="'.$valor.'"type="number" class="form-control" name="valor" id="inputdata" placeholder="R$">
</div>
<div class="form-group col-md-6">
<label for="inputCpf">Quantidade</label>
<input value="'.$qnt_estoque.'"type="number" class="form-control" name="qnt_estoque" id="inputCpf">
</div>
<div class="form-row w-100">
<div class="form-group col-md-6">
  <label for="inputCity">Data de abastecimento</label>
  <input value="'.$dta_abastecimento.'"type="date" class="form-control" name="dta_abastecimento" id="inputCity">
</div>
<div>
<button type="submit" name="cadastrar" class="btn btn-outline cadastro">Atualizar</button>
</div>
</form>
</div>';


include('footer.php');

?>

<script>
$('#idCliente').css("display","none");


</script>