<?php

$atualdata = date('yy/m/d');

include("header.php");

$querySelect = "select * from addcliente where dta_partida >= '$atualdata' and situacao = 'ativo'"; 
$queryBanco = mysqli_query($conn, $querySelect);

if(!isset($_SESSION['login'])){ 
   echo ' <script>window.location.href = "index.php"</script>';
    }

?>




<div>
    <section>
        <header>

            <h1 class="text-center"> Bem-vindo ao sistema de controle da Viagem Certa</h1>
            

        </header>

    </section>
    <body class=" text-center">
    
<p class="mt-5">Ultimos cinco clientes cadastrados</p>
    
    
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
                $nome = $array['nome']; 
                $email = $array['email']; 
                $dta_nascimento = $array['dta_nascimento']; 
                $cpf = $array['CPF']; 
                $partida = $array['partida']; 
                $destino = $array['destino']; 
                $dta_partida = $array['dta_partida']; 
                $dta_chegada = $array['dta_chegada']; 



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