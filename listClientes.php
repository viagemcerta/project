<?php


include('header.php');
if(isset($_SESSION['login'])){ 
  
}else{ 
    echo ' <script>
    window.location.href = "index.php";
    </script>';
}

?>

<h1 class="text-center">Lista de Clientes</h1>
<a href="formClientes.php"><button type="button">Add Cliente</button></a>
<table class="table ">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
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



</table>



<?php


include('footer.php');


?>

