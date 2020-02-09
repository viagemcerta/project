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

$nome =  $queryArray['nomeProduto'];
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
    <select    class="custom-select form-control text-uppercase" id="inputGroupSelect">
      <option >Selecione o cliente</option>
      <?php 
      $queryCliente = "select * from addcliente where situacao = 'ativo'";
      $clienteBanco = mysqli_query($conn, $queryCliente);
      echo '<script>
      var cpf = [];

      
      </script>';
      while($clienteArray = mysqli_fetch_array($clienteBanco)){ 
        $clienteNome = $clienteArray['nome'];
        $cpf = $clienteArray['CPF'];
        
        
        echo '<option required class="text-uppercase" id="ajax">'.$clienteNome.'</option>
        <option class="text-uppercase" style="display: none" id="cpf">'.$cpf.'</option>';
        echo '<script>
        cpf["'.$clienteNome.'"] = "'.$cpf.'";
       
        </script>';
      }

      echo '<script>
      $("select").click(function(){ 
        var x =  $(this).children(":selected").text();
       console.log(x);
       $("#cpfCliente").val(cpf[x]);
 
      });
      
      
      </script>';
     
     
      
      ?>
    </select>
  </div>
     <!-- usei esse input só pra enviar o id como post -->
     <div class="form-group col-md-3 ">
     <label>CPF</label>
 <input required type="text" readonly class="form-control" name="cpfCliente"    id="cpfCliente">
     </div>
<!-- ################################### -->
 <!-- usei esse input só pra enviar o id como post -->
 <input style="display:none" name="id" value="<?php echo $id;  ?>" type="text">
<!-- ################################### -->

    <div class="form-group col-md-3 ">
      <label for="inputEmail4">Produto</label>
      <input required type="text" class="form-control" name="nomeProduto" value="<?php echo $nome; ?>" id="inputProduto">
    </div>
  <div class="form-group col-md-3">
  <select  class="custom-select form-control" id="inputGroupSelect">
    <?php
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
    ?>
    </select>
  </div>
  <div class="form-group col-md-3">
    <label for="inputCpf">Preço</label>
    <input required type="" maxlength="11" value="<?php echo $valor; ?>" class="form-control" name="preco" id="inputCpf" placeholder="R$">
  </div>
  <div class="form-row w-100">
    <div class="form-group col-md-3">
      <label for="inputCity">Partida</label>
      <input required type="text" class="form-control" name="partida" id="inputCity">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Destino</label>
      <input required type="text" class="form-control" name="destino" id="inputCity">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Data de partida</label>
      <input required type="date" onkeyup="dataVendas()" class="form-control" name="dta_partida" id="partida">
    <small id="err"></small>
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Data de chegada</label>
      <input required type="date" onkeyup="dataVendas()" class="form-control" name="dta_chegada"  id="chegada">
      <small id="err2"></small>
    </div>
    <button name="addvenda" id="vendas" type="submit" class="btn btn-outline cadastro">Finalizar venda</button>
    <?php 
if(isset($_SESSION['cadastrado'])){

  echo  '<label class="tex-center text-uppercase text-success" >'.$_SESSION['cadastrado'].'</label>'; 
  unset($_SESSION['cadastrado']);
  
  }else{ 

    
  }
  
  
  ?>
  </form>
</div>



<script type="text/javascript">
            $("#cpf").mask("000.000.000-00");
</script>

<?php 

include('footer.php');

?>
