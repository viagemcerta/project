<?php

include("connection.php");

session_start(); 
session_destroy();

$id = $_GET['id'];

$query ="UPDATE funcionario set status = 0 where id_funcionario = $id";
mysqli_query($conn, $query);

echo '<script>window.location.href= "index.php"; </script>';



?>