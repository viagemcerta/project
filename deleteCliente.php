<?php

$id = $_GET['id'];

include("connection.php"); 

$query = "update addcliente set situacao = 'inativo' where id_cliente = $id";


if(mysqli_query($conn, $query)){ 
echo ' <script>window.location.href = "listClientes.php"</script>';

}else{ 
    echo "err";
}



?>