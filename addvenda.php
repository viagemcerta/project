<?php
session_start();

if(isset($_POST['addvenda'])){ 



$cpf = $_POST['cpfCliente'];
$idProduto = $_POST['id'];
$valor = $_POST['preco'];
$partida = $_POST['partida'];
$destino = $_POST['destino'];
$dta_partida = $_POST['dta_partida'];
$dta_chegada = $_POST['dta_chegada'];
$atualdata = date('yy/m/d');
include("connection.php");


$msg = "";

if($cpf == null){  
    $msg = " | CPF E/OU CLIENTE EM BRANCO";
}
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
 
echo $cpf;
include('connection.php');

$query = "insert into vendas(id_cliente,id_produto,valor,dta_venda,partida,destino,dta_partida,dta_chegada)
values('$idCliente', '$idProduto','$valor','$atualdata','$partida','$destino','$dta_partida','$dta_chegada')";

if(mysqli_query($conn, $query)){ 
    $queryUpdate = "UPDATE produtos set qnt_estoque = $estoque where id_produto = $idProduto";
    $produtoBancoUpdate = mysqli_query($conn, $queryUpdate);
    echo ' <script>window.location.href = "formVenda.php"</script>';
    $_SESSION['cadastrado'] = "cadastrado!";


}else{ 
    echo ' <script>window.location.href = "formVenda.php"</script>';
    
    $_SESSION['cadastrado'] = "Falha ao tentar cadastrar $msg";
}




}
















?>