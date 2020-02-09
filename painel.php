<?php

$atualdata = date('yy/m/d');

include("header.php");

$querySelect = "select * from addcliente where situacao = 'ativo' and dataCadastro >= '$atualdata' "; 
$queryBanco = mysqli_query($conn, $querySelect);



?>

<div>
    <section>
        <header>

            <h1 class="text-center"> Bem-vindo ao sistema de controle da Viagem Certa</h1>
            

        </header>

    </section>
    <body class=" text-center">
    </body>

    <table class="table">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de Nascimento</th>
            <th>CPF</th>
            <th>Partida</th>
            <th>Destino</th>
            <th>Data da partida</th>
            <th>Data da chegada</th>
        </tr>
    <tbody>
        
            <?php

            if($queryBanco = mysqli_query($conn, $querySelect)){
            for($x = 0; $x < 5; $x++){
            if($array = mysqli_fetch_array($queryBanco)){
                $id = $array['id_cliente'];
                $queryVenda = "select * from vendas v, addcliente c where v.id_cliente = c.id_cliente";
                $bancoVenda = mysqli_query($conn, $queryVenda);
                $arrayVenda = mysqli_fetch_array($bancoVenda);


                
                $nome = $array['nome']; 
                $email = $array['email']; 
                $dta_nascimento = $array['dta_nascimento']; 
                $cpf = $array['CPF']; 
                $partida = $arrayVenda['partida']; 
                $destino = $arrayVenda['destino']; 
                $dta_partida = $arrayVenda['dta_partida']; 
                $dta_chegada = $arrayVenda['dta_chegada']; 

                

                echo '<tr><td>'.$nome.'</td>
                <td>'.$email.'</td>
                <td>'.$dta_nascimento.'</td>
                <td>'.$cpf.'</td>
                <td>'.$partida.'</td>
                <td>'.$destino.'</td>
                <td>'.$dta_partida.'</td>
                <td>'.$dta_chegada.'</td>'; 
            }else{ 
                
            }              

            }

            
        }else{
            
        }


            ?>


</div>

<?php



include("footer.php");


?>