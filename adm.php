<?php


include('header.php');
if(isset($_SESSION['login'])){ 
  
}else{ 
    echo ' <script>
    window.location.href = "index.php";


    </script>';
}




$querySelect = "select * from funcionario "; 
$queryBanco = mysqli_query($conn, $querySelect);




?>

<h1 class="text-center" style="color:#38B6FF;">Lista de Funcionários</h1>
<?php 
if(isset($_SESSION['msg'])){

  echo  '<div class="container text-center"><label class="text-center text-uppercase text-success" >'.$_SESSION['msg'].'</label></div>'; 
  unset($_SESSION['msg']);
  
  }else{ 

    
  }
  
  
  ?>
<table class="table">
       <thead class="table table-bordered text-center">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Login</th>
            <th>Cargo</th>
            <th>STATUS</th>
            <th>Editar</th>
            <th>Excluir</th>
            <th>ADM</th>
        </tr>
        </thead>
    <tbody>
        
            <?php

            


            while($array = mysqli_fetch_array($queryBanco)){
                $id = $array['id_funcionario'];
                $nome = $array['nomeFuncionario']; 
                $email = $array['email']; 
                $dta_nascimento = $array['cargo']; 
                $cpf = $array['login'];
                $status = $array['status'];

                if($status == 1){ 
                    $status = "<p class='text-success' >ONLINE</p>";
                }else{ 
                    $status = "<p class='text-secondary' >OFFLINE</p>";
                }



                echo '<tr class="text-center text-uppercase"><td>'.$nome.'</td>
                <td>'.$email.'</td>
                <td>'.$cpf.'</td>
                <td>'.$dta_nascimento.'</td>
                <td>'.$status.'</td>
                <td><a href="editarAdm.php?id='.$id.' "><button type="button" class="btn btn-success">Editar</button></a></td>
                <td><a href="deleteFuncionario.php?id='.$id.'"><button type="button"  class="btn btn-danger">Excluir</button></a></td>
                <td><a href="mudarFuncionario.php?id='.$id.'"><button type="button"  class="btn btn-primary">Liberar/bloquear</button></a></td></tr>

                ';

            }
            ?>
        
    </tbody>



</table>



<?php


include('footer.php');




?>

