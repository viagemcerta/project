<?php

include('header.php');
if(isset($_SESSION['login'])){ 
  
}else{ 
    echo ' <script>
    window.location.href = "index.php";
    </script>';
}

$querySelect = "select * from vendas V, produtos P, addcliente A"; 
$queryBanco = mysqli_query($conn, $querySelect);

?>

<h1 class="text-center" style="color:#38B6FF;">Lista de Vendas</h1>
<table class="table">
       <thead class="table table-bordered text-center">
        <tr>
            <th>CPF</th>
            <th>Produto</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Destino</th>
            <th>Partida</th>
            <th>Data da partida</th>
            <th>Data da chegada</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
        </thead>
    <tbody>
        
            <?php

            while($array = mysqli_fetch_array($queryBanco)){
                $cpf = $array['CPF'];
                $produto = $array['nome
                ']; 
                $categoria = $array['categoria']; 
                $preço = $array['valor'];  
                $destino = $array['destino'];
                $partida = $array['partida']; 
                $dta_partida = $array['dta_partida']; 
                $dta_chegada = $array['dta_chegada']; 



                echo '<tr><td>'.$cpf.'</td>
                <td>'.$produto.'</td>
                <td>'.$categoria.'</td>
                <td>'.$preço.'</td>
                <td>'.$destino.'</td>
                <td>'.$partida.'</td>
                <td>'.$dta_partida.'</td>
                <td>'.$dta_chegada.'</td>
                <td>Editar</td>
                <td><a href="deleteCliente.php "><button type="button"  class="btn btn-success">Excluir</button></a></td></tr>';
                

            }

            



            ?>
        
    </tbody>



</table>



<?php


include('footer.php');


?>

