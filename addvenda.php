<?php


if(isset($_POST['addvenda'])){ 

$cpf = $_POST['cpf'];
$idProduto = $_POST['id'];
$valor = $_POST['preco'];
$atualdata = date('yy/m/d');
include("connection.php");

//buscando cliente
$queryCliente = "select * from addcliente where CPF = '$cpf'";
$clienteBanco = mysqli_query($conn, $queryCliente);
$clienteArray = mysqli_fetch_array($clienteBanco);
$idCliente = $clienteArray['id_cliente'];

$queryProduto = "select * from produtos where id_produto = $idProduto";
$produtoBanco = mysqli_query($conn, $queryProduto);
$produtoArray = mysqli_fetch_array($produtoBanco);
$estoque = $produtoArray['qnt_estoque'];
$estoque = $estoque - 1;


include('connection.php');

$query = "insert into vendas(id_cliente,id_produto,valor,dta_venda)
values('$idCliente', '$idProduto','$valor','$atualdata')";

if(mysqli_query($conn, $query)){ 
    $queryUpdate = "UPDATE produtos set qnt_estoque = $estoque where id_produto = $idProduto";
    $produtoBancoUpdate = mysqli_query($conn, $queryUpdate);
    echo "venda cadastrada"; 

}else{ 
    echo "err";
}




}
















?>