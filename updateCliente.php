<?php



include("connection.php"); 

session_start();

$id = $_POST{'id'};
$nome = $_POST['nome'];
$email = $_POST['email']; 
$cpf = $_POST['CPF']; 


   $query ="update addcliente set nome ='$nome', email = '$email', CPF='$cpf' where id_cliente = $id";
    if(mysqli_query($conn, $query)){
       echo ' <script>window.location.href = "listClientes.php"</script>';
        $_SESSION['cadastrado'] = "cadastrado!";
    }else{ 
        echo "err";
        
    }


















?>