<?php



include("connection.php"); 

session_start();


$nome = $_POST['nome'];
$email = $_POST['email']; 
$cpf = $_POST['CPF']; 
$dta_nascimento = $_POST['dta_nascimento'];
$destino = $_POST['destino']; 
$partida = $_POST['partida']; 
$dta_partida = $_POST['dta_partida']; 
$dta_chegada = $_POST['dta_chegada'];


   $query ="update addcliente set nome ='$nome', email = '$email', CPF='$cpf', dta_nascimento = '$dta_nascimento',
   destino = '$destino', partida = '$partida', dta_partida = '$dta_partida', dta_chegada = '$dta_chegada' ";
    if(mysqli_query($conn, $query)){
       echo ' <script>window.location.href = "listClientes.php"</script>';
        $_SESSION['cadastrado'] = "cadastrado!";
    }else{ 
        echo "err";
    }


















?>