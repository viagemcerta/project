<?php

$id = $_GET['id'];

include("connection.php"); 

$queryProd = "select * from vendas v, produtos p where  v.id_produto = p.id_produto";
$queryBanco = mysqli_query($conn, $queryProd);
$queryArray = mysqli_fetch_array($queryBanco);
$idProd = $queryArray['id_produto'];
$estoque = $queryArray['qnt_estoque'];

$estoque = $estoque + 1;


$queryProd2 = "UPDATE produtos set qnt_estoque = $estoque where id_produto = $idProd ";


$query = "delete FROM vendas where id_venda = $id";


if(mysqli_query($conn, $query)){ 
    mysqli_query($conn, $queryProd2);
    echo ' <script>window.location.href = "listVendas.php"</script>';
}else{ 
    echo "err";
    echo ' <script>window.location.href = "listVendas.php"</script>';
}






?>