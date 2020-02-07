<?php

$id = $_GET['id'];

include("connection.php"); 

$query = "delete FROM funcionario where id_funcionario = $id";


if(mysqli_query($conn, $query)){ 
    echo "Delete success! ";
    echo ' <script>window.location.href = "adm.php"</script>';
}else{ 
    echo "err";
    echo ' <script>window.location.href = "adm.php"</script>';
}






?>