<?php
include("connection.php");
include('header.php');
if(isset($_SESSION['login'])){ 
  
}else{ 
    echo ' <script>
    window.location.href = "index.php";
    </script>';
}

if(isset($_GET['id'])){ 
$id = $_GET['id'];
$query = "select * from produtos where id_produto = '$id'";
$queryBanco = mysqli_query($conn, $query);

$queryArray = mysqli_fetch_array($queryBanco);

$nome =  $queryArray['nome'];
$categoria = $queryArray['categoria'];
$valor = $queryArray['valor'];


}else{ 
  
$nome =  "";
$categoria = "";
$valor = "";

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
    <select  class="custom-select form-control" id="inputGroupSelect">
      <?php 
      $queryCliente = "select * from addcliente order by nome asc";
      $clienteBanco = mysqli_query($conn, $queryCliente);
      while($clienteArray = mysqli_fetch_array($clienteBanco)){ 
        $clienteNome = $clienteArray['nome'];
        $cpf = $clienteArray['CPF'];
        
        echo '<option>'.$clienteNome.'</option>';
      }

      
      
      ?>
    </select>
  </div>

  <!-- usei esse input só pra enviar o cpf como post -->
  <input style="display:none" name="cpf" value="<?php echo $cpf;  ?>" type="text">
<!-- ################################### -->
 <!-- usei esse input só pra enviar o id como post -->
 <input style="display:none" name="id" value="<?php echo $id;  ?>" type="text">
<!-- ################################### -->

    <div class="form-group col-md-3 ">
      <label for="inputEmail4">Produto</label>
      <input disabled type="text" class="form-control" name="produto" value="<?php echo $nome; ?>" id="inputProduto">
    </div>
  <div class="form-group col-md-3">
  <select  class="custom-select form-control" id="inputGroupSelect">
    <?php
    if($categoria == "Hospedagem"){
    echo '
    <option>Categoria...</option>
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
    ?>
    </select>
  </div>
  <div class="form-group col-md-3">
    <label for="inputCpf">Preço</label>
    <input disabled type="number" value="<?php echo $valor; ?>" class="form-control" name="preco" id="inputCpf" placeholder="R$">
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
<?php 
if(isset($_SESSION['cadastrado'])){

  echo  '<label class="text-center mx-auto text-uppercase text-success" >'.$_SESSION['cadastrado'].'</label>'; 
  unset($_SESSION['cadastrado']);
  
  }else{ 

    
  }
  
  
  ?>



<script type="text/javascript">
            $("#cpf").mask("000.000.000-00");
</script>

<?php 

include('footer.php');

?>
