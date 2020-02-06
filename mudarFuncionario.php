<?php

include("connection.php"); 

session_start();

$id = $_GET['id'];


    $queryConsult = "select admFunc from funcionario where id_funcionario = '$id'";
    if($queryBanco = mysqli_query($conn, $queryConsult)){
     $queryArray = mysqli_fetch_array($queryBanco);


     if($queryArray['admFunc'] == 0){
     $query ="update funcionario set admFunc = 1
     where id_funcionario = $id";
 
 
 
     if(mysqli_query($conn, $query)){
         $_SESSION['msg'] = "Funcionário recebeu a função de administrador";
         echo ' <script>window.location.href = "adm.php"</script>';
      }else{ 
          echo "err";
      }
    }else{ 

        $query ="update funcionario set admFunc = 0
        where id_funcionario = $id";
    
    
    
        if(mysqli_query($conn, $query)){
            $_SESSION['msg'] = "Funcionário perdeu a função de administrador";
            echo ' <script>window.location.href = "adm.php"</script>';
         }else{ 
             echo "err";
         }



    }

     }else{ 
    
         
     }
    


    
?>