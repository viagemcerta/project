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
<table class="table">
       <thead class="table table-bordered text-center">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Login</th>
            <th>Cargo</th>
            <th>Editar</th>
            <th>Excluir</th>
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



                echo '<tr class="text-center text-uppercase"><td>'.$nome.'</td>
                <td>'.$email.'</td>
                <td>'.$cpf.'</td>
                <td>'.$dta_nascimento.'</td>
                <td><a href="editarAdm.php?id='.$id.' "><button type="button" class="btn btn-success">Editar</button></a></td>
                <td><a href="deleteFuncionario.php?id='.$id.'"><button type="button"  class="btn btn-danger">Excluir</button></a></td></tr>
                ';

            }
            ?>
        
    </tbody>



</table>



<?php


include('footer.php');




?>

