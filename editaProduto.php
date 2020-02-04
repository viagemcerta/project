<?php

$id = $_GET['id'];

include("connection.php"); 

$query = "select * FROM produtos where id_produto = $id";

if($sql = mysqli_query($conn, $query)){ 
    echo "Editado com sucesso! ";
}else{ 
    echo "err";
}

$list = mysqli_fetch_array($sql);
    $nome = $list['nome'];
    $categoria = $list['categoria'];
    $valor = $list['valor'];
    $qnt_estoque = $list['qnt_estoque'];
    $dta_abastecimento = $list["dta_abastecimento"];

echo '
<div class="container">
    <h1 class="text-center" style="color: #FF914D; text-align:center;">Editar produto</h1>
    <form action="addproduto.php" method="post" >
<div class="form">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName4">Produto</label>
      <input type="text" name="nome" class="form-control" id="inputName4 placeholder="Nome completo" value="'.$nome.'">
    </div>
    <div class="form-group col-md-6">
    <select class="custom-select form-control" id="inputGroupSelect">
    <option selected>Categoria...</option>
    <option>Pacote</option>
    <option>Hospedagem</option>
    <option>Voo</option>
    </select>
    </div>
  <div class="form-group col-md-6">
    <label for="inputData">Preço</label>
    <input type="number" class="form-control" name="valor" id="inputdata" placeholder="R$" value="'.$valor.'">
  </div>
  <div class="form-group col-md-6">
    <label for="inputCpf">Quantidade</label>
    <input type="number" class="form-control" name="qnd_estoque" id="inputCpf" value="'.$qnt_estoque.'">
  </div>
  <div class="form-row w-100">
    <div class="form-group col-md-6">
      <label for="inputCity">Data de abastecimento</label>
      <input type="date" class="form-control" name="dta_abastecimento" id="inputCity" value="'.$dta_abastecimento.'">
    </div>
    <div>
    <button type="submit" name="cadastrar" class="btn btn-outline cadastro1">Atualizar</button>
    </div>
    </form>
</div>
'

?>