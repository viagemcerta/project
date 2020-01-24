<?php


include('header.php');
if(isset($_SESSION['login'])){ 
  
}else{ 
    echo ' <script>
    window.location.href = "index.php";
    </script>';
}

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



</table>



<?php


include('footer.php');


?>

