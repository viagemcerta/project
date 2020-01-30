<?php


include('header.php');
if(isset($_SESSION['login'])){ 
  
}else{ 
    echo ' <script>
    window.location.href = "index.php";
    </script>';
}
$querySelect = "select * from produtos"; 
$queryBanco = mysqli_query($conn, $querySelect);


?>

<h1 class="text-center" style="color:#38B6FF;">Lista de Produtos</h1>
<table class="table ">
    <thead class="table table-bordered text-center">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th>Abastecimento</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>

    </thead>
    <tbody>
        
        <?php

        while($array = mysqli_fetch_array($queryBanco)){
            $id = $array['id_produto'];
            $nome = $array['nome']; 
            $email = $array['categoria']; 
            $dta_nascimento = $array['valor']; 
            $cpf = $array['qnt_estoque']; 
            $partida = $array['dta_abastecimento']; 



            echo '
            <tr>
            <td scope="col">'.$id.'</td>
            <td scope="col">'.$nome.'</td>
            <td scope="col">'.$email.'</td>
            <td scope="col">'.$dta_nascimento.'</td>
            <td scope="col">'.$cpf.'</td>
            <td scope="col">'.$partida.'</td>
            <td scope="col"><a href="editaCliente.php?id='.$id.' "><button type="button"  class="btn btn-dark">Editar</button></a></td>
            <td scope="col"><a href="deleteCliente.php?id='.$id.' "><button type="button"  class="btn btn-dark">Excluir</button></a></td>
            </tr>';
            

        }

        



        ?>
    
</tbody>



</table>



<?php


include('footer.php');


?>

