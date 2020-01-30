<?php

include('header.php');
if(isset($_SESSION['login'])){ 
  
}else{ 
    echo ' <script>
    window.location.href = "index.php";
    </script>';
}

$querySelect = "select * from vendas"; 
$queryBanco = mysqli_query($conn, $querySelect);

?>

<div class="container">
<h1 class="text-center" style="color:#38B6FF;">Venda Disponíveis</h1>
<table class="table ">
    <thead class="table table-bordered text-center">
        <tr>
            <th>Produto</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Adicionar ao Cliente</th>
        </tr>

    </thead>





    <tbody>
    </div>

<?php


include('footer.php');


?>