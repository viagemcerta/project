<?php



include("connection.php"); 

session_start();

$id = $_POST{'id'};
$nome = $_POST['nome'];
$email = $_POST['email']; 
$cpf = $_POST['CPF']; 
$dta_nascimento = $_POST['dta_nascimento'];


   $query ="update addcliente set nome ='$nome', email = '$email', CPF='$cpf', dta_nascimento = '$dta_nascimento' where
   id_cliente = $id";
    if(mysqli_query($conn, $query)){
       echo ' <script>window.location.href = "listClientes.php"</script>';
        $_SESSION['cadastrado'] = "cadastrado!";
    }else{ 
        echo "err";
        
    }


















?>