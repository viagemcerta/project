<?php



include("connection.php"); 



if(isset($_POST['cadastrar'])){ 
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $valor = $_POST['valor'];
    $qnt_estoque = $_POST['qnd_estoque'];
    $dta_abastecimento = $_POST["dta_abastecimento"];


    $query = "insert into produtos(nome,categoria,valor,qnt_estoque,dta_abastecimento)
    values ('$nome','$categoria','$valor','$qnt_estoque','$dta_abastecimento')"; 
    
    if(mysqli_query($conn, $query)){ 
        echo "Cadastro ok";
    }else{ 
        echo "err";
    }










}







?>