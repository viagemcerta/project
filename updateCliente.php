<?php



include("connection.php"); 

session_start();

$id = $_POST{'id'};
$nome = $_POST['nome'];
$email = $_POST['email']; 
$cpf = $_POST['CPF']; 
<<<<<<< HEAD


   $query ="update addcliente set nome ='$nome', email = '$email', CPF='$cpf' where id_cliente = $id";
=======
$dta_nascimento = $_POST['dta_nascimento'];



   $query ="update addcliente set nome ='$nome', email = '$email', CPF='$cpf', 
   dta_nascimento = '$dta_nascimento' where
   id_cliente = $id";
>>>>>>> 17fdf930dd3e27d576a2d1ae53012e4974c432b4
    if(mysqli_query($conn, $query)){
       echo ' <script>window.location.href = "listClientes.php"</script>';
        $_SESSION['cadastrado'] = "cadastrado!";
    }else{ 
        echo "err";
        
    }


















?>