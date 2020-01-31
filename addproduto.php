<?php



include("connection.php"); 

session_start();

if(isset($_POST['cadastrar'])){ 
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $valor = $_POST['valor'];
    $qnt_estoque = $_POST['qnd_estoque'];
    $dta_abastecimento = $_POST["dta_abastecimento"];


    $query = "insert into produtos(nome,categoria,valor,qnt_estoque,dta_abastecimento,situacao)
    values ('$nome','$categoria','$valor','$qnt_estoque','$dta_abastecimento','ativo')"; 
    
    if(mysqli_query($conn, $query)){
        echo ' <script>window.location.href = "formProdutos.php"</script>';
        $_SESSION['cadastrado'] = "cadastrado!";
    }else{ 
        echo "err";
    }










}







?>