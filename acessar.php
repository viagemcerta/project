<?php


include("header.php");

?>


<h1 class="container" style="color:#FFFFFF">Viagem Certa</h1>
<div id="login" class="card container">
  <div class="card-body">
    <h5 class="card-title" style="color: #38B6FF; text-align:center;">Login</h5>
    <div class="container">
<form action="login.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Login</label>
    <input type="text" class="form-control" name="vendedor" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
  </div>
  <div>
  <button type="submit" name="logar" class="login">Login</button>
</div>
<div>
  <a href="" name="" class="recuperar">Esqueceu a senha?</a>
</div>
</form>
</div>
  </div>
</div>


<?php


include("footer.php");

?>
