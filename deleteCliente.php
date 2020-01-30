<?php

$id = $_GET['id'];

include("connection.php"); 

$query = "update addcliente set situacao = 'inativo' where id_cliente = $id";


if(mysqli_query($conn, $query)){ 
    echo "Delete success! ";
}else{ 
    echo "err";
}



?>