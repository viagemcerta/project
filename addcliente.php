<?php


session_start();
include('connection.php');
if(isset($_POST['addcliente'])){ 

$nome = $_POST['nome'];
$email = $_POST['email']; 
$cpf = $_POST['CPF']; 

$queryCPF = "select * from addcliente where CPF = '$cpf' and situacao = 'ativo'"; 
$bancoCPF = mysqli_query($conn, $queryCPF);
$arrayCPF = mysqli_fetch_array($bancoCPF);
if($cpf == $arrayCPF['CPF']){ 
$_SESSION['cadastrado'] = "Falha ao tentar cadastrar! CPF EXISTENTE";
echo ' <script>window.location.href = "formClientes.php"</script>';   
}else{



$dta_nascimento = $_POST['dta_nascimento'];
$atualdata = date('yy/m/d');





$query = "insert into addcliente(nome,email,CPF,dta_nascimento,situacao,dataCadastro)
values('$nome','$email','$cpf','$dta_nascimento','ativo','$atualdata')";

if(mysqli_query($conn, $query)){ 
    echo ' <script>window.location.href = "formClientes.php"</script>';
    $_SESSION['cadastrado'] = "cadastrado!";
}else{ 
    echo ' <script>window.location.href = "formClientes.php"</script>';
 
    $_SESSION['cadastrado'] = "Falha ao tentar cadastrar";

}
 


}
 


}















?>