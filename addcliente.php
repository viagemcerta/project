<?php

session_start();
if(isset($_POST['addcliente'])){ 

$nome = $_POST['nome'];
$email = $_POST['email']; 
$cpf = $_POST['CPF']; 
$dta_nascimento = $_POST['dta_nascimento'];
include('connection.php');

$query = "insert into addcliente(nome,email,CPF,dta_nascimento,situacao)
values('$nome','$email','$cpf','$dta_nascimento','ativo')";

if(mysqli_query($conn, $query)){ 
    echo ' <script>window.location.href = "formClientes.php"</script>';
    $_SESSION['cadastrado'] = "cadastrado!";
}else{ 
    echo ' <script>window.location.href = "formClientes.php"</script>';
 
    $_SESSION['cadastrado'] = "Falha ao tentar cadastrar";

}
 


}
 


















?>