<?php


if(isset($_POST['addvenda'])){ 

$cpf = $_POST['cpf'];
$produto = $_POST['produto']; 
$categoria= $_POST['categoria']; 
$preço = $_POST['preço'];
$destino = $_POST['destino']; 
$partida = $_POST['partida']; 
$dta_partida = $_POST['dta_partida']; 
$dta_chegada = $_POST['dta_chegada'];

include('connection.php');

$query = "insert into vendas(cpf,produto,categoria,preço,destino,partida,dta_partida,dta_chegada)
values('$cpf','$produto','$categoria','$preço','$destino','$partida','$dta_partida','$dta_chegada')";

if(mysqli_query($conn, $query)){ 
    echo "venda cadastrada"; 
}else{ 
    echo "err";
}




}
















?>