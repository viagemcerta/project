<?php

$id = $_GET['id'];

include("connection.php"); 

$query = "update addcliente "


if(mysqli_query($conn, $query)){ 
    echo "Editado com sucesso! ";
}else{ 
    echo "err";
}






?>