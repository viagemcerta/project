<?php

include("connection.php"); 

session_start();

$id = $_POST['id'];
$nome = $_POST['nomeFuncionario'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = md5($_POST['senha']);
$cargo = $_POST['cargo'];


    $query ="update funcionario set nomeFuncionario ='$nome', email ='$email', login ='$login', senha = '$senha', cargo = '$cargo'
    where id_funcionario = $id";



    if(mysqli_query($conn, $query)){
        echo ' <script>window.location.href = "adm.php"</script>';
     }else{ 
         echo "err";
     }
?>