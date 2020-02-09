<?php

include('header.php');
if(isset($_SESSION['login'])){ 
  
}else{ 
    echo ' <script>
    window.location.href = "index.php";
    </script>';
}

$querySelect = "select * from vendas V, produtos P, addcliente A where v.id_cliente = a.id_cliente and v.id_produto = p.id_produto"; 
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
            <th>Cancelamento</th>
        </tr>
        </thead>
    <tbody>
        
            <?php

            while($array = mysqli_fetch_array($queryBanco)){
                $id = $array['id_venda'];
                $cpf = $array['CPF'];
                $produto = $array['nomeProduto']; 
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
                <td><a href="deleteVenda.php?id='.$id.' "><button type="button"  class="btn btn-success">Cancelar Venda</button></a></td></tr>';
                

            }

            



            ?>
        
    </tbody>



</table>



<?php


include('footer.php');


?>

