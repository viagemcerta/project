<?php

session_start();
if(isset($_POST['addcliente'])){ 

$nome = $_POST['nome'];
$email = $_POST['email']; 
$cpf = $_POST['CPF']; 
$dta_nascimento = $_POST['dta_nascimento'];
$destino = $_POST['destino']; 
$partida = $_POST['partida']; 
$dta_partida = $_POST['dta_partida']; 
$dta_chegada = $_POST['dta_chegada'];

include('connection.php');

$query = "insert into addcliente(nome,email,CPF,dta_nascimento,destino,partida,dta_partida,dta_chegada,situacao)
values('$nome','$email','$cpf','$dta_nascimento','$destino','$partida','$dta_partida','$dta_chegada','ativo')";

if(mysqli_query($conn, $query)){ 
    echo ' <script>window.location.href = "formClientes.php"</script>';
    $_SESSION['cadastrado'] = "cadastrado!";
}else{ 
    echo ' <script>window.location.href = "formClientes.php"</script>';
 
    $_SESSION['cadastrado'] = "Falha ao tentar cadastrar";

}
 


}
 


















?>