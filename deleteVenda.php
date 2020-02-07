<?php

$id = $_GET['id'];

include("connection.php"); 

$query = "delete FROM vendas where id_venda = $id";


if(mysqli_query($conn, $query)){ 
    echo "Delete success! ";
    echo ' <script>window.location.href = "listVendas.php"</script>';
}else{ 
    echo "err";
    echo ' <script>window.location.href = "listVendas.php"</script>';
}






?>