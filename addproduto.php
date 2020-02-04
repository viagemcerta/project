<?php



include("connection.php"); 

session_start();

if(isset($_POST['cadastrar'])){ 
    $nome = $_POST['nomeProduto'];
    $categoria = $_POST['categoria'];
    $err = 0;
    if($categoria == "Categoria..."){ 
    $err = 1;

    }

    $valor = $_POST['valor'];
    $qnt_estoque = $_POST['qnt_estoque'];
    $dta_abastecimento = $_POST["dta_abastecimento"];


    $query = "insert into produtos(nomeProduto,categoria,valor,qnt_estoque,dta_abastecimento,situacao)
    values ('$nome','$categoria','$valor','$qnt_estoque','$dta_abastecimento','ativo')"; 
    
    if($err == 0){
    if(mysqli_query($conn, $query)){
        echo ' <script>window.location.href = "formProdutos.php"</script>';
        $_SESSION['cadastrado'] = "cadastrado!";
    }else{ 
        echo ' <script>window.location.href = "formProdutos.php"</script>';
        $_SESSION['cadastrado'] = "Erro ao tentar cadastrar!";
    }
}else{ 
    echo ' <script>window.location.href = "formProdutos.php"</script>';
        $_SESSION['cadastrado'] = "Erro ao tentar cadastrar! Categoria vazia";

}


}


?>