<?php

include("connection.php"); 

session_start();

$id = $_POST['id'];
$nome = $_POST['nomeProduto'];
    $categoria = $_POST['categoria'];
    $valor = $_POST['valor'];
    $qnt_estoque = $_POST['qnt_estoque'];
    $dta_abastecimento = $_POST["dta_abastecimento"];


    $query ="update produtos set nomeProduto ='$nome', categoria ='$categoria', valor ='$valor', qnt_estoque = '$qnt_estoque', dta_abastecimento = '$dta_abastecimento'
    where id_produto = $id";



    if($categoria != "Categoria..."){
    if(mysqli_query($conn, $query)){
        echo ' <script>window.location.href = "listProdutos.php"</script>';
     }else{ 
         echo "err";
     }
 


    }else{ 
        echo ' <script>window.location.href = "listProdutos.php"</script>';
 
        $_SESSION['cadastrado'] = "Falha ao tentar atualizar! Categoria vazia!";

    }

?>