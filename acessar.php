<?php

include("header.php");

?>

<div class="container primeiro">
<div>
<h1 class="h1" style="color:#FFFFFF; text-align: center;">Viagem Certa</h1>
</div>
<div id="login" class="card container">
  <div class="card-body">
    <h5 class="card-title" style="color: #38B6FF; text-align:center;">Login</h5>
    <div class="container">
<form action="login.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Login</label>
    <input placeholder="Digite o usuário..." required type="text" class="form-control" name="vendedor" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input placeholder="Digite a senha..."  required type="password" name="senha" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="text-center">
  <button type="submit" name="logar" class="btn btn-outline login">Login</button>
</div>
<div class="text-center">
  <a href="" name="" class="recuperar">Esqueceu a senha?</a>
</div>


</form>
<?php 
if(isset($_SESSION['msg'])){

  echo  '<label class="text-center  text-uppercase text-danger" style="margin-left:65px;" >'.$_SESSION['msg'].'</label>'; 
  unset($_SESSION['msg']);
  
  }else{ 

    
  }
  
  
  ?>
</div>
</div>
</div>
</div>



<?php


include("footer.php");

?>
<script>
  $("nav").css("display", "none");
  $("body").css("background-color", "#38B6FF");
</script>