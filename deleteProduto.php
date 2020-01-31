<?php

$id = $_GET['id'];

include("connection.php"); 

$query = "update produtos set situacao = 'inativo' where id_produto = $id";


if(mysqli_query($conn, $query)){ 
    echo "Delete success! ";
}else{ 
    echo "err";
}


?>