<?php


include('header.php');
if(isset($_SESSION['login'])){ 
  
}else{ 
    echo ' <script>
    window.location.href = "index.php";
    </script>';
}




$querySelect = "select * from addcliente where situacao = 'ativo' "; 
$queryBanco = mysqli_query($conn, $querySelect);




?>

<h1 class="text-center" style="color:#38B6FF;">Lista de Clientes</h1>
<table class="table">
       <thead class="table table-bordered">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de Nascimento</th>
            <th>CPF</th>
            <th>Partida</th>
            <th>Destino</th>
            <th>Data da partida</th>
            <th>Data da chegada</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
        </thead>
    <tbody>
        
            <?php

            while($array = mysqli_fetch_array($queryBanco)){
                $id = $array['id_cliente'];
                $nome = $array['nome']; 
                $email = $array['email']; 
                $dta_nascimento = $array['dta_nascimento']; 
                $cpf = $array['CPF']; 
                $partida = $array['partida']; 
                $destino = $array['destino']; 
                $dta_partida = $array['dta_partida']; 
                $dta_chegada = $array['dta_chegada']; 



                echo '<tr><td>'.$nome.'</td>
                <td>'.$email.'</td>
                <td>'.$dta_nascimento.'</td>
                <td>'.$cpf.'</td>
                <td>'.$partida.'</td>
                <td>'.$destino.'</td>
                <td>'.$dta_partida.'</td>
                <td>'.$dta_chegada.'</td>
                <td><a href="editaCliente.php?id='.$id.' "><button type="button"  class="btn btn-primary">Editar</button></a></td></tr>
                <td><a href="deleteCliente.php?id='.$id.' "><button type="button"  class="btn btn-danger">Excluir</button></a></td></tr>
                ';

            }

            



            ?>
        
    </tbody>



</table>



<?php


include('footer.php');


?>

