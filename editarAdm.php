<?php

include("header.php");
$id = $_GET['id'];

include("connection.php");

$query = "select * from funcionario where id_funcionario = '$id'";
$queryBanco = mysqli_query($conn, $query);
$array = mysqli_fetch_array($queryBanco);

$nome = $array['nomeFuncionario'];
$login = $array['login'];
$email = $array['email'];
$cargo = $array['cargo'];



echo '<div class="container">

<form action="updateFuncionario.php" method="post">
            <div class="form-row">
              <div class="col-md-6 mb-4">
                <label for="validationDefault01">Login</label>
                <input type="text" name="login" value="'.$login.'" class="form-control" id="validationDefault01" required>
              </div>
              <div class="col-md-6 mb-4">
                <label for="validationDefault02">Nome</label>
                <input type="text" name="nomeFuncionario" value="'.$nome.'" class="form-control" id="validationDefault02" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault03">E-mail</label>
                <input type="text" name="email" value="'.$email.'" class="form-control" id="validationDefault03" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault04">Senha</label>
                <input type="password" name="senha" class="form-control" id="validationDefault04"  required>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationDefault05">Cargo</label>
                <input type="text" name="cargo" value="'.$cargo.'" class="form-control" id="validationDefault05" required>
              </div>
              <input type="text" style="display:none" name="id" value="'.$id.'" class="form-control" id="validationDefault05" required>

              </div>
              <div class="modal-footer">
             <button type="submit" name="cadastrar" class="btn btn-primary">Cadastrar</button>
            </div>
            </form>

</div>';


include('footer.php');

?>

<script>
$('#idCliente').css("display","none");


</script>