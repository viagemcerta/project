<?php


include('header.php');
if(isset($_SESSION['login'])){ 
  
}else{ 
    echo ' <script>
    window.location.href = "index.php";
    </script>';
}
$querySelect = "select * from produtos where situacao = 'ativo' and qnt_estoque > 0"; 
$queryBanco = mysqli_query($conn, $querySelect);


?>

<h1 class="text-center" style="color:#38B6FF;">Vendas Disponíveis</h1>
<table class="table ">
<table class="table ">
    <thead class="table table-bordered text-center">
        <tr>
        <th>ID</th>
            <th>Produto</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Quantidade em estoque</th>
            <th>Adicionar ao Cliente</th>
        </tr>

    </thead>
    <tbody>
        
        <?php
    if(!$queryBanco == null){
        while($array = mysqli_fetch_array($queryBanco)){
            $id = $array['id_produto'];
            $nome = $array['nomeProduto']; 
            $email = $array['categoria']; 
            $dta_nascimento = $array['valor']; 
            $estoque = $array['qnt_estoque'];



            echo '
            <tr class="text-center">
            <td scope="col">'.$id.'</td>
            <td scope="col">'.$nome.'</td>
            <td scope="col">'.$email.'</td>
            <td scope="col">'.$dta_nascimento.'</td>
            <td scope="col">'.$estoque.'</td>
            <td><a href="formVenda.php?id='.$id.' "><button type="button"  class="btn btn-success">Adicionar ao Cliente</button></a></td></tr>

     </tr>';
            

        }

        

    }

        ?>
    
</tbody>



</table>



<?php


include('footer.php');


?>

