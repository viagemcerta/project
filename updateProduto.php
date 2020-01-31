<?php

include("connection.php"); 

session_start();

$id = $_POST['id'];
$nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $valor = $_POST['valor'];
    $qnt_estoque = $_POST['qnd_estoque'];
    $dta_abastecimento = $_POST["dta_abastecimento"];


    $query ="update produtos set nome ='$nome', categoria ='$valor', valor ='$qnt_estoque', dta_abastecimento = '$dta_abastecimento'
    where id_produto = $id";

    if(mysqli_query($conn, $query)){
        echo ' <script>window.location.href = "listProdutos.php"</script>';
     }else{ 
         echo "err";
     }
 




?>