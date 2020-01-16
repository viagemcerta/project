<?php


include("header.php");

?>

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
  <button type="submit" name="logar" class="btn btn-primary">Submit</button>
</form>
</div>


<?php


include("footer.php");

?>
