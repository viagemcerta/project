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

<h1 class="text-center" style="color:#FF914D;">Lista de Produtos</h1>
<table class="table ">
    <thead class="thead">
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



            echo '<tr><td>'.$id.'</td>
            <td>'.$nome.'</td>
            <td>'.$email.'</td>
            <td>'.$dta_nascimento.'</td>
            <td>'.$cpf.'</td>
            <td>'.$partida.'</td>
            <td><a href="editaCliente.php?id='.$id.' "><button type="button"  class="btn btn-dark">Editar</button></a></td></tr>
            <td><a href="deleteCliente.php?id='.$id.' "><button type="button"  class="btn btn-dark">Excluir</button></a></td></tr>';
            

        }

        



        ?>
    
</tbody>



</table>



<?php


include('footer.php');


?>

