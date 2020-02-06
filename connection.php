<?php



$conn = mysqli_connect("localhost","root","") or die("Err no banco");

$banco = "create database viagemcerta";
$bancoNovo = 0;

if(mysqli_query($conn, $banco)){ 
    echo "banco criado com sucesso";
    echo "<br> Atualizando tabelas...";

    header("refresh:2;url= index.php");

}else{ 
$conn = mysqli_connect("localhost","root","","viagemcerta") or die("Err no banco");
}


$tabelas = "CREATE TABLE `addcliente` (
    `id_cliente` int(11) NOT NULL AUTO_INCREMENT primary key,
    `nome` varchar(20) DEFAULT NULL,
    `email` varchar(50) DEFAULT NULL,
    `CPF` varchar(100) DEFAULT NULL,
    `dta_nascimento` date DEFAULT NULL,
    `situacao` varchar(50) NOT NULL	
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

  $tabelas2 = "CREATE TABLE `cadastro` (
    `id_cadastro` int(11) NOT NULL AUTO_INCREMENT primary key,
    `login` varchar(20) DEFAULT NULL,
    `nome` varchar(20) DEFAULT NULL,
    `email` varchar(20) DEFAULT NULL,
    `senha` varchar(20) DEFAULT NULL,
    `cargo` varchar(20) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

$tabelas3 =  'CREATE TABLE `login` (
    `id_login` int(11) NOT NULL AUTO_INCREMENT primary key,
    `vendedor` varchar(20) DEFAULT NULL,
    `senha` varchar(20) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;';

  $tabelas4 = 'CREATE TABLE `produtos` (
    `id_produto` int(4) NOT NULL AUTO_INCREMENT primary key,
    `nomeProduto` varchar(50) DEFAULT NULL,
    `categoria` varchar(20) DEFAULT NULL,
    `valor` int(50) DEFAULT NULL,
    `qnt_estoque` int(200) DEFAULT NULL,
    `dta_abastecimento` date DEFAULT NULL,
    `situacao` varchar(50) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;';
  
  $tabelas5 = 'CREATE TABLE `vendas` (
    `id_venda` int(4) NOT NULL AUTO_INCREMENT primary key,
    `id_cliente` int(11) DEFAULT NULL,
    `id_produto` int(4) DEFAULT NULL,
    `valor` int(50) DEFAULT NULL,
    `destino` varchar(20) DEFAULT NULL,
    `partida` varchar(20) DEFAULT NULL,
    `dta_partida` date DEFAULT NULL,
    `dta_chegada` date DEFAULT NULL,
    `dta_venda` date DEFAULT NULL,
    FOREIGN KEY (`id_cliente`) REFERENCES `addcliente` (`id_cliente`),
    FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;';

$tabelas6 = 'CREATE TABLE `funcionario` (
  `id_funcionario` int(4) NOT NULL AUTO_INCREMENT primary key,
  `login` varchar(15) DEFAULT NULL,
  `nomeFuncionario` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `godPass` varchar(50) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;';

    mysqli_query($conn, $tabelas);
    mysqli_query($conn, $tabelas2);
    mysqli_query($conn, $tabelas3);
    mysqli_query($conn, $tabelas4);
    mysqli_query($conn, $tabelas5);
    mysqli_query($conn, $tabelas6);

  
    

//conexão com o banco de dados
//$conn = mysqli_connect("localhost","root","","viagemcerta") or die("Err no banco");





?>