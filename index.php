

<?php

include("header.php");


?>

<label>Situação do login:<?php if(isset($_SESSION['login'])){echo $_SESSION['login'];}else{echo "Offline";} ?></label>

<h1>Hello world</h1>
<form method="post" action="login.php">
<div>
<label> Login do vendedor </label> 
<input type="text" name="vendedor"> 
</div> 
<div> 
<label> Senha  </label> 
<input type="text" name="senha"> 
</div>
<div> 
<button type="submit" name="logar">Signup</button>
<button type="submit" name="logout">Logout</button>
</div>
</form>


<?php

include("footer.php");


?>